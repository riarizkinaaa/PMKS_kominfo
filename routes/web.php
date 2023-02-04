<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DusunController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KelasPenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendidikanController;

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
route::get('/',[LoginController::class,'login'])->name('login')->middleware('guest');

//--------------------authentifikasi-------------------------
route::get('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
route::post('/login',[LoginController::class,'authenticate'])->name('authenticate');
route::post('/logout',[LoginController::class,'logout'])->name('logout');

route::get('dashboard', [DashboardController::class,'index'])->name('dashboard')->middleware('auth');

//-----------Pendata--------
//-----------Verifikator--------
//-----------Pimpinan--------
//-----------Admin--------
Route::resource('/admin',KecamatanController::class);
Route::resource('/desa',DesaController::class);
Route::resource('/dusun',DusunController::class);
Route::resource('/kelasPen',KelasPenController::class);
Route::resource('/pendidikan',PendidikanController::class);
Route::resource('/pekerjaan',PekerjaanController::class);

