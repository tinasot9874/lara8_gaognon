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

Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard.dashboard');
    })->name('dashboard');

    Route::get('/product', function(){
        return view('admin.product.index');
    })->name('product');
});


