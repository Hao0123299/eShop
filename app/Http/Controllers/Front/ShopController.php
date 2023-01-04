<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Services\Product\ProductServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $productService;
    private $productCommentService;

    public function __construct(ProductServiceInterface $productService,
                                ProductCommentServiceInterface $productCommentService)
    {
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;
    }

    public function show($id){
        $product = $this->productService->find($id); //gọi tới productService để lấy dữ liệu
        $relatedProducts = $this->productService->getRelatedProducts($product);
        return view('front.shop.show', compact('product', 'relatedProducts'));
    }
    public function postComment(Request $request){
        $this->productCommentService->create($request->all());
        return redirect()->back();
    }
    public function index(Request $request){

        $products = $this->productService->getProductOnIndex($request);
        return view('front.shop.index', compact('products'));
    }
}
