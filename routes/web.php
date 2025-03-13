<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;




Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/my-dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');





require __DIR__.'/auth.php';
