<?php

use App\Http\Controllers\frontend\AboutusController;
use App\Http\Controllers\frontend\BranchController;
use App\Http\Controllers\frontend\CalculatorController;
use App\Http\Controllers\frontend\ContactusController;
use App\Http\Controllers\frontend\CsrController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\LandingController;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\ReportController;
use App\Http\Controllers\frontend\ServicesController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/',[LandingController::class,'index'])->name('landing');
Route::get('/aboutus',[AboutusController::class,'index'])->name('aboutus');
Route::get('/report',[ReportController::class,'index'])->name('report');
Route::get('/branch',[BranchController::class,'index'])->name('branch');

Route::get('/news',[NewsController::class,'news'])->name('news');
Route::get('/newsedu1',[NewsController::class,'newsedu1'])->name('newsedu1');
Route::get('/newsedu2',[NewsController::class,'newsedu2'])->name('newsedu2');
Route::get('/newsedu3',[NewsController::class,'newsedu3'])->name('newsedu3');

Route::get('/csr',[CsrController::class,'csr'])->name('csr');

Route::get('/contactus',[ContactusController::class,'index'])->name('contactus');

Route::get('/gallery',[GalleryController::class,'index'])->name('gallery');
Route::get('/gallery1',[GalleryController::class,'gallery1'])->name('gallery1');

Route::get('/services',[ServicesController::class,'index'])->name('services');
Route::get('/calculator',[CalculatorController::class,'index'])->name('emicalculator');



Route::get('/migrate', function () {
    Artisan::call('migrate');
    return 'Migration fresh has been successfully';
});
Route::get('/clear', function () {
    Artisan::call('optimize:clear');
    return 'Application all kind of cache has been cleared';
});
