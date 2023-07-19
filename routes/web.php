<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
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

Route::get('/', function () {
    return view('welcome');
})->name('homepage');


Route::middleware('admin')->group(function (){
    Route::prefix('admin')->group(function (){
        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');
        Route::controller(AttributeController::class)->group(function (){
            Route::get('get-attributes','getAttribute');
            Route::get('attributes','index')->name('attributes.index');
            Route::post('add-attribute','store')->name('attributes.store');
            Route::get('edit-attribute/{id}','edit')->name('attributes.edit');
            Route::post('update-attribute/{id}','update')->name('attributes.update');
            Route::get('delete-attribute/{id}','destroy')->name('attributes.destroy');

        });
        Route::resource('category', CategoryController::class)->except('show');
        Route::controller(BrandController::class)->group(function (){
            Route::get('get-brands','getBrand')->name('brands.getBrands');
            Route::get('brands','index')->name('brands.index');
            Route::post('create-brand','store')->name('brands.store');
            Route::get('edit-brand/{id}','edit')->name('brands.edit');
            Route::post('update-brand/{id}','update')->name('brands.update');
            Route::get('delete-brand/{id}','destroy')->name('brands.destroy');
        });
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Category

