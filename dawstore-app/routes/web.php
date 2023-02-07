<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/', [ ProductsController::class,'products' ]);

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/female', function () {
    return view('female');
});

Route::get('/male', function () {
    return view('male');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/detail', function () {
    return view('detail');

});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('detail/{id?}', [ ProductsController::class, 'detail' ]) -> name('detail');




