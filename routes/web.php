<?php

use App\Http\Controllers\backend\Auth\loginControlller;
use App\Http\Controllers\backend\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('')->group(function () {

});

Route::prefix('/admin')->group(function () {

    // login routes
    Route::get('login',[loginControlller::class,'loginPage'])->name('admin.loginPage');
    Route::post('login',[loginControlller::class,'login'])->name('admin.login');
    Route::get('logout',[loginControlller::class,'logout'])->name('admin.logout');







    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

});
