<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show($id){
        $product = Product::findOrFail($id);

        // $avgRating = 0;
        // //Tổng cộng xếp hạng
        // //$sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        // //Lưu số lượng xếp hạng
        // $countRating = count($product->productComments);
        // if($countRating !=0){
        //     //Tính trung bình xếp hạng
        //     $avgRating = $sumRating / $countRating;
        // }

        return view('front.shop.show', compact('product'));

    }
}
