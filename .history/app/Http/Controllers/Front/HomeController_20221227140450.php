<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $menProduct = Product::where('feature', true)->where('product')
        return view('front.index');
    }
}
