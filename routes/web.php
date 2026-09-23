<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('service')->controller(\App\Http\Controllers\ServiceController::class)->name('service.')->group(function () {
    Route::post('/',  'store')->name('store');
    Route::get('/',  'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{service}/show',  'show')->name('show');
    Route::get('/{service}/edit',  'edit')->name('edit');
    Route::put('/{service}/update',  'update')->name('update');
    Route::delete('{service}/delete',  'delete')->name('delete');
});
Route::prefix('products')->controller(\App\Http\Controllers\ProductController::class)->name('products.')->group(function () {
    Route::post('/',  'store')->name('store');
    Route::get('/',  'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{product}/show',  'show')->name('show');
    Route::get('/{product}/edit',  'edit')->name('edit');
    Route::put('/{product}/update',  'update')->name('update');
    Route::delete('{product}/delete',  'delete')->name('delete');
});


