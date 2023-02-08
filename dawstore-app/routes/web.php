<?php

use App\Http\Controllers\AdminpanelController;
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
})->name('Home');

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

Route::get('female', [ ProductsController::class,'productsFemale' ]);


Route::get('/male', function () {
    return view('male');
})->name('male');

Route::get('male', [ ProductsController::class,'productsMale' ]);

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');


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

Route::get('/admin/admin-panel', [ AdminpanelController::class,'products' ]);

Route::get('/admin/admin-management', function () {
    return view('/admin/admin-management');
})->name('admin-management');

Route::get('/admin/product-manager', function () {
    return view('/admin/product-manager');
})->name('product-manager');

Route::get('/admin/edit-product', function () {
    return view('/admin/edit-product');
})->name('edit-product');

Route::get('/admin/create-admin', function () {
    return view('/admin/create-admin');
})->name('create-admin');

Route::get('/admin/profile-admin', function () {
    return view('/admin/profile-admin');
})->name('profile-admin');

Route::get('/admin/forgot-password', function () {
    return view('/admin/forgot-password');
})->name('forgot-password');

Route::post('/admin/product-manager', [ AdminpanelController::class, 'insert' ]) -> name('insert-product');

Route::get('/admin/edit-product/{id}', [ AdminpanelController::class, 'edit' ]) -> name('edit-product');

Route::put('/admin/edit-product/{id}', [ AdminpanelController::class, 'update' ]) -> name('update-product');

Route::delete('/admin/admin-panel/{id}', [ AdminpanelController::class, 'delete' ]) -> name('admin-panel');







