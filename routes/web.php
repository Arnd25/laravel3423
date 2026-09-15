<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('service')->name('service.')->group(function () {
    Route::get('/create', [\App\Http\Controllers\ServiceController::class, 'create'])->name('create');
    Route::post('/', [\App\Http\Controllers\ServiceController::class, 'store'])->name('store');
    Route::get('/', [\App\Http\Controllers\ServiceController::class, 'index'])->name('index');
    Route::get('/{service}/show', [\App\Http\Controllers\ServiceController::class, 'show'])->name('show');
});
