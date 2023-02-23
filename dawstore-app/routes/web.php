<?php

use App\Http\Controllers\AdminpanelController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InsertBbdd;
use App\Http\Controllers\LoginAdminPanel;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\WhishlistController;
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

//Landing
Route::get('/landing', function () {
    return view('landing');
})->name('landing');

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

Route::get('products/{genre}/{filter?}/{brand?}', [ ProductsController::class,'productsGenre']);

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('detail/{id?}/{id_brand?}', [ ProductsController::class, 'detail' ]) -> name('detail');


// INICIO SESIÓN Y REGISTRO
Route::get('/whishlist', function () {
     return view('whishlist');
})->name('whishlist');

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth')->name('profile'); //Si no esta logeado no puede entrar y le redirige al login (TOCAR EL MIDDLEWARE)

//CARRITO

Route::get('addcart/{id?}', [ CartController::class, 'addProduct' ])->name('cart.addProduct');

Route::get('/cart', [ CartController::class, 'showCart' ])->name('cart.products');

Route::delete('/cart/{id}', [ CartController::class, 'delete' ]) -> name('cart');

//WHITELIST

Route::get('addwhishlist/{id?}', [ WhishlistController::class, 'addProduct' ])->name('whishlist.addProduct');

Route::get('/whishlist', [ WhishlistController::class, 'showwhishlist' ])->name('whishlist.products');

Route::delete('/whishlist/{id}', [ WhishlistController::class, 'delete' ]) -> name('whishlist');

//RUTAS DASHBOARD

Route::get('/admin/admin-panel', function () {
    return view('admin.admin-panel');
})->middleware('auth')->name('admin-panel');

Route::get('/admin/admin-panel', [ AdminpanelController::class,'products' ]);

Route::get('/admin/admin-management', function () {
    return view('admin.admin-management');
})->name('admin-management');

Route::get('/admin/product-manager', function () {
    return view('admin.product-manager');
})->name('product-manager');

Route::get('/admin/edit-product', function () {
    return view('admin.edit-product');
})->name('edit-product');

Route::get('/admin/category-manager', function () {
    return view('admin.category-manager');
})->name('category-manager');

Route::get('/admin/edit-category', function () {
    return view('admin.edit-category');
})->name('edit-category');

Route::get('/admin/brand-manager', function () {
    return view('admin.brand-manager');
})->name('brand-manager');

Route::get('/admin/edit-brand', function () {
    return view('admin.edit-brand');
})->name('edit-brand');

Route::get('/admin/create-admin', function () {
    return view('admin.create-admin');
})->name('create-admin');

Route::get('/admin/profile-admin', function () {
    return view('admin.profile-admin');
})->name('profile-admin');

Route::get('/admin/forgot-password', function () {
    return view('admin.forgot-password');
})->name('forgot-password');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

//Contact form
Route::get('/contact', function () {
    return view('contact');
})->name('contact');



//PRODUCTS

Route::get('/admin/product-manager', [ AdminpanelController::class, 'products_detail' ]);

Route::get('/admin/edit-product/{id}', [ AdminpanelController::class, 'edit' ]) -> name('edit-product');

Route::post('/admin/product-manager', [ AdminpanelController::class, 'insert' ]) -> name('insert-product');

Route::put('/admin/edit-product/{id}', [ AdminpanelController::class, 'update' ]) -> name('update-product');

Route::delete('/admin/admin-panel/{id}', [ AdminpanelController::class, 'delete' ]) -> name('admin-panel');

//CATEGORIAS

Route::get('/admin/category-manager', [ AdminpanelController::class,'category' ]);

Route::get('/admin/edit-category/{id}', [ AdminpanelController::class, 'edit_category' ]) -> name('edit-category');

Route::post('/admin/category-manager', [ AdminpanelController::class, 'insert_category' ]) -> name('insert-category');

Route::put('/admin/edit-category/{id}', [ AdminpanelController::class, 'update_category' ]) -> name('update-category');

Route::delete('/admin/category-manager/{id}', [ AdminpanelController::class, 'delete_category' ]) -> name('category-manager');


//BRAND

Route::get('/admin/brand-manager', [ AdminpanelController::class,'brand' ]);

Route::get('/admin/edit-brand/{id}', [ AdminpanelController::class, 'edit_brand' ]) -> name('edit-brand');

Route::post('/admin/brand-manager', [ AdminpanelController::class, 'insert_brand' ]) -> name('insert-brand');

Route::put('/admin/edit-brand/{id}', [ AdminpanelController::class, 'update_brand' ]) -> name('update-brand');

Route::delete('/admin/brand-manager/{id}', [ AdminpanelController::class, 'delete_brand' ]) -> name('brand-manager');





