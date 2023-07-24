<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Middleware\CheckAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index'])->name('client.home.index');


Route::middleware('admin')->group(function (){
    Route::prefix('admin')->group(function (){
        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');

        Route::resource('category', CategoryController::class)->except('show');
        Route::controller(BrandController::class)->group(function (){
            Route::get('get-brands','getBrand')->name('brands.getBrands');
            Route::get('brands','index')->name('brands.index');
            Route::post('create-brand','store')->name('brands.store');
            Route::get('edit-brand/{id}','edit')->name('brands.edit');
            Route::post('update-brand/{id}','update')->name('brands.update');
            Route::get('delete-brand/{id}','destroy')->name('brands.destroy');
        });
        Route::controller(ProductController::class)->group(function (){
            Route::get('get-products','getProduct')->name('products.getProducts');
            Route::get('products','index')->name('products.index');
            Route::get('create-product','create')->name('products.create');
            Route::post('create-product','store')->name('products.store');
            Route::get('edit-product/{id}','edit')->name('products.edit');
            Route::put('update-product/{id}','update')->name('products.update');
            Route::get('delete-product/{id}','destroy')->name('products.destroy');
        });
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


