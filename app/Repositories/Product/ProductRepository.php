<?php

	namespace App\Repositories\Product;

	use App\Models\Product;
    use App\Models\ProductCategory;
    use App\Repositories\BaseRepository;

    use Illuminate\Http\Request;
    use function PHPUnit\Framework\isTrue;

    class ProductRepository extends BaseRepository implements ProductRepositoryInterface
    {
        public function getModel(){
            return Product::class;
        }

        public function getRelatedProducts($product, $limit = 4){
            return $this->model->where('product_category_id', $product->product_category_id)
                ->where('tag', $product->tag)
                ->limit($limit)
                ->get();
        }

        public function getFeaturedProductsByCategory(int $categoryId){
            return $this->model->where('feature', true)
                ->where('product_category_id', $categoryId)
                ->get();
        }

        public function getProductOnIndex($request){

            $search = $request->search ?? '';
            $products = $this->model->where('name', 'like', '%'.$search.'%');

            $products = $this->sortAndPagination($products, $request);
            return $products;
        }
        public function getProductsByCategory($categoryName, $request){
            $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery();
            $products = $this->sortAndPagination($products, $request);
            return $products;
        }
        private function sortAndPagination($products, Request $request){
            $perPage = $request->show ?? 3;
            $sortBy = $request->sort_by ?? 'latest';
            switch ($sortBy){
                case 'latest':
                    $products = $products->orderBy('id');
                    break;
                case 'name-asc';
                    $products = $products->orderBy('name');
                    break;
                case 'name-desc';
                    $products = $products->orderByDesc('name');
                    break;
                case 'price-asc';
                    $products = $products->orderBy('price');
                    break;
                case 'price-desc';
                    $products = $products->orderByDesc('price');
                    break;
                default;
                    $products = $products->orderBy('id');

            }
            $products = $products->paginate($perPage);
            $products->appends(['sort_by'=> $sortBy, 'show'=> $perPage]);
            return $products;
        }
    }



