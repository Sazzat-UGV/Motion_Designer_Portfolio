<?php

use App\Http\Controllers\backend\AboutMeController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\Auth\loginControlller;
use App\Http\Controllers\backend\BackupController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProjectController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\frontend\HomePageController;
use App\Models\Project;
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

    Route::get('/', [HomePageController::class, 'homePage'])->name('user.homePage');
    Route::get('about', [HomePageController::class, 'aboutPage'])->name('user.aboutPage');
    Route::get('details/{slug}', [HomePageController::class, 'projectDetails'])->name('user.projectDetails');
});

Route::prefix('/admin')->group(function () {

    // login routes
    Route::get('login', [loginControlller::class, 'loginPage'])->name('admin.loginPage');
    Route::post('login', [loginControlller::class, 'login'])->name('admin.login');

    Route::middleware(['auth'])->group(function () {
        Route::get('logout', [loginControlller::class, 'logout'])->name('admin.logout');

        // dashboard route
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

        // profile routes
        Route::get('my/profile', [AdminController::class, 'profilePage'])->name('admin.profilePage');
        Route::put('profile/update/{id}', [AdminController::class, 'updateProfile'])->name('updateProfile');
        Route::post('update/image', [AdminController::class, 'updateImage'])->name('admin.updateImage');
        Route::post('update/password', [AdminController::class, 'updatePassword'])->name('admin.updatePassword');

        // about_me routes
        Route::get('about/me', [AboutMeController::class, 'showAboutMe'])->name('admin.showAboutMe');
        Route::put('about/me/{id}', [AboutMeController::class, 'updateAboutMe'])->name('admin.updateAboutMe');

        // setting route
        Route::get('setting', [SettingController::class, 'settingPage'])->name('admin.settingPage');
        Route::put('update/hiro/video/{id}', [SettingController::class, 'updateHiroVideo'])->name('admin.updateHiroVideo');
        Route::post('update/favicon', [SettingController::class, 'updateFavicon'])->name('admin.updateFavicon');
        Route::post('update/preloader', [SettingController::class, 'updatePreloader'])->name('admin.updatePreloader');
        Route::post('update/lottie/file', [SettingController::class, 'updateLottieFile'])->name('admin.updateLottieFile');
        Route::post('update/json/file', [SettingController::class, 'updateJsonFile'])->name('admin.updateJsonFile');

        // resourse controller
        Route::resource('project',ProjectController::class);

        //activation route
        Route::get('project/active/{id}',[ProjectController::class,'activeProject'])->name('admin.activeProject');
    });
});
