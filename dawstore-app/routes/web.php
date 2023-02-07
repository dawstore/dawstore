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


//RUTAS ECOMMERCE
Route::get('/', function () {
    return view('index');
});

Route::get('/', [ ProductsController::class,'products' ]);

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/female', function () {
    return view('female');
})->name('female');

Route::get('/male', function () {
    return view('male');
})->name('male');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');


Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('detail/{id?}', [ ProductsController::class, 'detail' ]) -> name('detail');

//RUTAS DASHBOARD

Route::get('/admin/dashboard', function () {
    return view('/admin/dashboard');
})->name('dashboard');

Route::get('/admin/admin-panel', function () {
    return view('/admin/admin-panel');
})->name('admin-panel');

Route::get('/admin/admin-management', function () {
    return view('/admin/admin-management');
})->name('admin-management');

Route::get('/admin/product-manager', function () {
    return view('/admin/product-manager');
})->name('product-manager');



