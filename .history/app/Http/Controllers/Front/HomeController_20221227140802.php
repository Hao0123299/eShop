<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $menProduct = Product::where('feature', true)->where('product_category_id', 1)->get();
        $womenProduct = Product::where('feature', true)->where('product_category_id', 2)->get();
        return view('front.index', compact('menProduct','womenProduct'));
    }
}
