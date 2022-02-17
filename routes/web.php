<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AidmoneyController;
use App\Http\Controllers\ForeignController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SendMoneyController;
use App\Http\Controllers\ThreemainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HistoryActionController;
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

//GALLERY PAGES
Route::get('/galereya', [GalleryController::class, 'index'])->name('gallery.index');
//GALLERY PAGES

//CONTACT PAGES
Route::get('/habarlasmak', [ContactController::class, 'index'])->name('contact.index');
Route::get('/habarlasmak/ugrat', [ContactController::class, 'create'])->name('contact.create');
Route::post('/habarlasmak/ugrat', [ContactController::class, 'store'])->name('contact.store');
//CONTACT PAGES

//OURCOUNTRY PAGES
Route::get('/biz-barada/yurdumyzdaky-maglumatlar', [CityController::class, 'index'])->name('ourcountry.index');
Route::get('/biz-barada/yurdumyzdaky-maglumatlar/{id}', [CityController::class, 'show'])->name('ourcountry.show');
//OURCOUNTRY PAGES

//FOREIGN PAGES
Route::get('/biz-barada/dasary-yurlardaky-maglumatlar', [ForeignController::class, 'index'])->name('foreign.index');
Route::get('/biz-barada/dasary-yurlardaky-maglumatlar/{id}', [ForeignController::class, 'show'])->name('foreign.show');
//FOREIGN PAGES

//HISTORY-ACTION PAGES
Route::get('/careler', [HistoryActionController::class, 'index'])->name('history_action.index');
//HISTORY-ACTION PAGES

//THREEMAIN PAGES
Route::get('/tebigaty-gormak/{id}', [ThreemainController::class, 'show'])->name('main.show');
//THREEMAIN PAGES

//STATIK PAGES
Route::get('/biz-barada', [AboutController::class, 'index'])->name('about.index');
Route::get('/biz-barada/statistika', [AboutController::class, 'statik'])->name('about.statik');
//STATIK PAGES

Route::namespace('index')->middleware(['auth'])->group(function () {
    Route::get('/ulanyjy-profili', [ProfilController::class, 'index'])->name('profil.index');

    Route::get('/pul-ugrat', [SendMoneyController::class, 'create'])->name('sendmoney.create');
    Route::post('/pul-ugrat', [SendMoneyController::class, 'store'])->name('sendmoney.store');

    Route::get('/tebigaty-gormak/uytget/{name}', [ThreemainController::class, 'edit'])->name('main.edit');
    Route::post('/tebigaty-gormak/uytget/{name}', [ThreemainController::class, 'update'])->name('main.update');
});

Route::namespace('index')->middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/ulanyjylar', [AdminController::class, 'user'])->name('admin.user');
    Route::get('/admin/gecirilin-careler', [AdminController::class, 'history_action'])->name('admin.history_action');
    Route::get('/admin/bas-sahypa', [AdminController::class, 'home'])->name('admin.home');
    Route::get('/admin/biz-barada', [AdminController::class, 'about'])->name('admin.about');
    Route::get('/admin/galeriya', [AdminController::class, 'gallery'])->name('admin.gallery');
    Route::get('/admin/dunyadaki-tazelikler', [AdminController::class, 'foreign'])->name('admin.foreign');
    Route::get('/admin/yurdumyzdaky-tazelikler', [AdminController::class, 'our_country'])->name('admin.our_country');
    Route::get('/admin/teswirler', [AdminController::class, 'contact'])->name('admin.contact');
});
