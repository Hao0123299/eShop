<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $productService;
    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index(){
        //Hiển thị sản phẩm ra trang chủ
        $menProduct = Product::where('featured', true)->where('product_category_id', 1)->get();
        $womenProduct = Product::where('featured', true)->where('product_category_id', 2)->get();

        //Hiển thị 3 blogs mới nhất ra trang chủ
        $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();
//        $featureProducts = $this->productService->getFeaturedProducts();

        return view('front.index', compact('menProduct','womenProduct', 'blogs'));
    }
}
