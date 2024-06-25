<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CsrController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\GallerySectionController;
use App\Http\Controllers\Admin\SchemaController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\frontend\GalleryController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, "index"])->name('admin.login');
Route::post('login', [AuthController::class, 'login'])->name('admin.login.store');
Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


Route::resource('banner', BannerController::class);
Route::resource('service', ServiceController::class);
Route::resource('schemes', SchemaController::class);
Route::resource('blogs', BlogController::class);
 Route::resource('faq', FaqController::class);
 Route::resource('csr', CsrController::class);
 Route::resource('gallerysection', GallerySectionController::class);
 Route::resource('type', TypeController::class);


?>
