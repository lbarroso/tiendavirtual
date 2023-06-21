<?php
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\ProductController::class, 'contact'])->name('contact');
Route::get('/productsingle/{id}', [App\Http\Controllers\ProductController::class, 'productsingle'])->name('products.single');
Route::get('/productgrid/{category}/{genre}', [App\Http\Controllers\ProductController::class, 'productgrid'])->name('products.grid');
