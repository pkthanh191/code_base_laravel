<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminHomeController;

Route::get('admin/login', [AdminAuthController::class, 'getLogin'])->name('getLogin');
Route::post('admin/login', [AdminAuthController::class, 'postLogin'])->name('postLogin');
Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('logout');

Route::middleware(['auth.admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home.dashboard');

    

});