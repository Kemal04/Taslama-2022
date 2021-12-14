<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ForeignController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
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

Route::get('/habarlasmak', [ContactController::class, 'contact'])->name('contact');
Route::get('/habarlasmak/ugrat', [ContactController::class, 'create'])->name('contact.create');
Route::post('/habarlasmak/ugrat', [ContactController::class, 'store'])->name('contact.store');

Route::get('/tebigaty-gormak/{id}', [ThreemainController::class, 'show'])->name('main.show');

Route::get('/biz-barada', [AboutController::class, 'index'])->name('about.index');
Route::get('/biz-barada/statistika', [AboutController::class, 'statik'])->name('about.statik');
Route::get('/biz-barada/yurdumyzdaky-maglumatlar', [AboutController::class, 'ourcountry'])->name('about.ourcountry');

Route::get('/biz-barada/dasary-yurlardaky-maglumatlar', [ForeignController::class, 'index'])->name('foreign.index');

