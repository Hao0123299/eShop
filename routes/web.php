<?php

    use App\Repositories\Product\ProductRepositoryInterface;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Front;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Front\HomeController::class, 'index']);
//Route::get('/', function (ProductRepositoryInterface $productRepository) {
//    return $productRepository->find(1);
//});
//Route::get('/shop/product/{id}', [Front\ShopController::class, 'show']);
