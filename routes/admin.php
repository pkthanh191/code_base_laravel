<?php

use App\Http\Controllers\Admin\AdminHomeController;

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home.dashboard');
});