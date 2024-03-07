<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengajuController;
use App\Http\Controllers\MengajukanController;

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
    return view('dashboard');
});

Route::get('/admin', [AdminController::class, 'index'])->name('home.admin.index');
Route::get('admin/tambah', [AdminController::class, 'create']);
Route::post('admin/simpan', [AdminController::class, 'store'])->name('admin.simpan');
Route::get('admin/{id}/edit', [AdminController::class, 'show']);
Route::patch('admin/{id}/update', [AdminController::class, 'update'])->name('admin.update');
Route::get('admin/{id}/hapus', [AdminController::class, 'destroy']);

Route::get('/pengaju', [PengajuController::class, 'index'])->name('home.pengaju.index');
Route::get('pengaju/tambah', [PengajuController::class, 'create']);
Route::post('pengaju/simpan', [PengajuController::class, 'store'])->name('pengaju.simpan');
Route::get('pengaju/{id}/edit', [PengajuController::class, 'show']);
Route::patch('pengaju/{id}/update', [PengajuController::class, 'update'])->name('pengaju.update');
Route::get('pengaju/{id}/hapus', [PengajuController::class, 'destroy']);

Route::get('/mengajukan', [MengajukanController::class, 'index'])->name('home.mengajukan.index');
Route::get('mengajukan/tambah', [MengajukanController::class, 'create']);
Route::post('mengajukan/simpan', [MengajukanController::class, 'store'])->name('mengajukan.simpan');
Route::get('mengajukan/{id}/edit', [MengajukanController::class, 'show']);
Route::patch('mengajukan/{id}/update', [MengajukanController::class, 'update'])->name('mengajukan.update');
Route::get('mengajukan/{id}/hapus', [MengajukanController::class, 'destroy']);