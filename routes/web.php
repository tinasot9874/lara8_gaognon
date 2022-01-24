<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\StoreSettingController;
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

Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard.dashboard');
    })->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);

    // Group router [Setting] start
    Route::name('setting.')->prefix('setting')->group(function (){
        Route::get('/general', [StoreSettingController::class, 'general'])->name('general');
    });

});


