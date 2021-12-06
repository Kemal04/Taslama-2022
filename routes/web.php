<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ThreemainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__ . '/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/galereya', [GalleryController::class, 'gallery'])->name('gallery');

Route::get('/habarlasmak', [HomeController::class, 'contact'])->name('contact');

Route::get('/tebigaty-gormak/{id}', [ThreemainController::class, 'show'])->name('main.show');

Route::get('/biz-barada', [AboutController::class, 'index'])->name('about.index');
Route::get('/biz-barada/statistika', [AboutController::class, 'statik'])->name('about.statik');
Route::get('/biz-barada/dasary-yurlardaky-maglumatlar', [AboutController::class, 'foreign'])->name('about.foreign');
Route::get('/biz-barada/yurdumyzdaky-maglumatlar', [AboutController::class, 'ourcountry'])->name('about.ourcountry');



