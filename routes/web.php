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
Route::prefix('posts')->controller(\App\Http\Controllers\PostController::class)->name('posts.')->group(function () {
    Route::post('/',  'store')->name('store');
    Route::get('/',  'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{post}/show',  'show')->name('show');
    Route::get('/{post}/edit',  'edit')->name('edit');
    Route::put('/{post}/update',  'update')->name('update');
    Route::delete('{post}/delete',  'delete')->name('delete');
});


