<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SekolahController;

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

Route::get('/', [DashboardController::class, 'index'])->name('manage');
// admin
Route::get('/manage/admin', [AdminController::class, 'index'])->name('xadmin.index');
//Route::post('manage/admin/getdata', 'AdminController@getData')->name('xadmin.getdata');
// kelas
Route::get('/manage/kelas', [KelasController::class, 'index'])->name('xkelas.index');
Route::get('/manage/kelas/create', 'KelasController@create')->name('xkelas.create');
Route::post('/manage/kelas/destroy', 'KelasController@destroy')->name('xkelas.hapus');
// siswa
Route::get('/manage/siswa', [SiswaController::class, 'index'])->name('xsiswa.index');
Route::get('/manage/sekolah', [SekolahController::class, 'index'])->name('xsekolah.index');
//Route::get('/admin', 'DashboardController@admin')->name('admin');
//Route::get('/','DashboardController@index')->name('beranda');


