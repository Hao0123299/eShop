<?php

    use App\Repositories\Product\ProductRepositoryInterface;
    use App\Services\Product\ProductServiceInterface;
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


Route::prefix('shop')->group(function (){
    Route::get('product/{id}', [Front\ShopController::class, 'show']);
    Route::post('product/{id}', [Front\ShopController::class, 'postComment']);
    Route::get('', [Front\ShopController::class, 'index']);
    Route::get('category/{categoryName}', [Front\ShopController::class, 'category']);
});
