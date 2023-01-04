<?php

	namespace App\Services\Product;

	use App\Repositories\Product\ProductRepositoryInterface;
    use App\Services\BaseService;


    class ProductService extends BaseService implements ProductServiceInterface
	{
        public $repository;
        public function __construct(ProductRepositoryInterface $productRepository)
        {
            $this->repository = $productRepository;
        }
        public function find($id)
        {
            $product = $this->repository->find($id);

            $avgRating = 0;
            // //Tổng cộng xếp hạng
            $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
            // //Lưu số lượng xếp hạng
            $countRating = count($product->productComments);
            if($countRating !=0){
            //     //Tính trung bình xếp hạng
            $avgRating = $sumRating / $countRating;
            }
            $product->avgRating = $avgRating;
            return $product;
        }
        public function getRelatedProducts($product, $limit = 4){
            $this->repository->getRelatedProducts($product, $limit);
        }

        public function getFeaturedProducts(){
            return [
                "men" => $this->repository->getFeaturedProductsByCategory(1),
                "women" => $this->repository->getFeaturedProductsByCategory(2),
            ];
        }
        public function getProductOnIndex($request){

            return $this->repository->getProductOnIndex($request);
        }
    }

