<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
use App\http\Controllers\BenihController;
use App\Http\Controllers\PupukController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('benih', BenihController::class);
Route::resource('daftar', DaftarController::class)->middleware('auth');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pupuk', [PupukController::class, 'index'])->name('pupuk');
Route::get('/pupuk/create', [PupukController::class, 'create'])->name('pupuk.create');
Route::post('/pupuk/store', [PupukController::class, 'store'])->name('pupuk.store');
Route::get('/pupuk/edit/{id}', [PupukController::class, 'edit'])->name('pupuk.edit');
Route::post('/pupuk/update/{id}', [PupukController::class, 'update'])->name('pupuk.update');
Route::get('/pupuk/delete/{id}', [PupukController::class, 'destroy'])->name('pupuk.delete');
Route::get('/pupuk/detail/{id}', [PupukController::class, 'show'])->name('pupuk.detail');