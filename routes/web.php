<?php

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
Route::get('/products/create', function () {
    return view('products/create');
});



Route::get('/cart',[\App\Http\Controllers\ProductsController::class,'getCart']);


Route::get('/products',[\App\Http\Controllers\ProductsController::class,'products']);
Route::get('/products/{product}',[\App\Http\Controllers\ProductsController::class,'show']);
Route::post('/products/store',[\App\Http\Controllers\ProductsController::class,'store'])->middleware('auth');
Route::get('/products/edit/{product}', [\App\Http\Controllers\ProductsController::class,'edit'])->middleware('auth');
Route::put('/products/{product}', [\App\Http\Controllers\ProductsController::class,'update'])->middleware('auth');
Route::get('/products/delete/{product}', [\App\Http\Controllers\ProductsController::class,'destroy'])->middleware('auth');
Route::get('/posts',[\App\Http\Controllers\ProductsController::class,'posts'])->middleware('auth');

Route::get('/add-to-cart/{id}',[\App\Http\Controllers\ProductsController::class,'getAddToCart'])->name('product.addToCart');


Route::get('/logout',[\App\Http\Controllers\ProductsController::class,'logout'])->middleware('auth');


Route::resource('tasks', \App\Http\Controllers\TaskController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
