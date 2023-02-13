<?php

use App\Http\Controllers\AdminpanelController;
use App\Http\Controllers\InsertBbdd;
use App\Http\Controllers\LoginAdminPanel;
use App\Http\Controllers\LoginController;
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

Route::get('/', [ ProductsController::class,'products']);

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('products/{genre}/{filter?}', [ ProductsController::class,'productsGenre']);

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('detail/{id?}', [ ProductsController::class, 'detail' ]) -> name('detail');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

//Iniciar sesion y Registro
Route::post('/inicio-sesion', [LoginController::class, 'login'])->name('inicio-sesion');
Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/whitelist', function () {
    return view('whitelist');
})->name('whitelist');

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth')->name('profile'); //Si no esta logeado no puede entrar y le redirige al login (TOCAR EL MIDDLEWARE)


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

Route::get('/admin/category-manager', function () {
    return view('/admin/category-manager');
})->name('category-manager');

Route::get('/admin/edit-category', function () {
    return view('/admin/edit-category');
})->name('edit-category');

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

//CATEGORIAS

Route::get('/admin/category-manager', [ AdminpanelController::class,'category' ]);

Route::get('/admin/edit-category/{id}', [ AdminpanelController::class, 'edit_category' ]) -> name('edit-category');

Route::post('/admin/category-manager', [ AdminpanelController::class, 'insert_category' ]) -> name('insert-category');

Route::put('/admin/edit-category/{id}', [ AdminpanelController::class, 'update_category' ]) -> name('update-category');

Route::delete('/admin/category-manager/{id}', [ AdminpanelController::class, 'delete_category' ]) -> name('category-manager');








