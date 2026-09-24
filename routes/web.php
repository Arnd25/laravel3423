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

Route::resource('posts', \App\Http\Controllers\PostController::class);


