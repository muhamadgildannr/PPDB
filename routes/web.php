<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdbController;

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

Route::get('/', [PpdbController::class, 'index'])->name('index');


//login
Route::get('/login', [PpdbController::class, 'login'])->name('login');
Route::post('/login', [PpdbController::class, 'auth'])->name('login.auth');

//registrasi
Route::get('/register', [PpdbController::class, 'register'])->name('register');
Route::post('/store', [PpdbController::class, 'store'])->name('store');

//PDF
Route::get('/print', [PpdbController::class, 'print'])->name('print');

Route::get('/logout', [PpdbController::class, 'logout'])->name('logout');

//hal admin
Route::middleware('isLogin', 'CekRole:admin')->group(function() {
    Route::get('/dashboard', [PpdbController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/users', [PpdbController::class, 'users'])->name('dashboard.users');
    Route::get('/dashboard/pembayaran', [PpdbController::class, 'pembayaran'])->name('pembayaran');
    Route::get('/dashboard/pembayaran/lihat/{pembayaran:user_id}', [PpdbController::class, 'lihat'])->name('dashboard.pembayaran.lihat');
    Route::get('/dashboard/pembayaran/detail/{pembayaran:user_id}', [PpdbController::class, 'detail'])->name('dashboard.pembayaran.detail');
    Route::patch('/dashboard/pembayaran/validasi/{pembayaran:user_id}', [PpdbController::class, 'validasi'])->name('dashboard.pembayaran.validasi');
    Route::patch('/dashboard/pembayaran/tolak/{pembayaran:user_id}', [PpdbController::class, 'tolak'])->name('dashboard.pembayaran.tolak');
});

//hal user
Route::middleware('isLogin', 'CekRole:user')->prefix('/dashboard')->name('dashboard.')->group(function () {
    Route::get('/dashboard', [PpdbController::class, 'dashboard'])->name('dashboard');
    Route::get('/tampilan/pembayaran', [PpdbController::class, 'pembayaran'])->name('pembayaran');
    Route::post('/dashboard/pembayaran/upload', [PpdbController::class, 'uploadPembayaran'])->name('pembayaran.upload');
    Route::patch('pembayaran/pembayaran/update', [PembayaranController::class, 'update'])->name('pembayaran.update');
});

Route::get('/error', [PpdbController::class, 'error'])->name('error');

Route::middleware(['isLogin', 'CekRole:admin,user'])->group(function() {
    Route::get('/dashboard', [PpdbController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/profile', [PpdbController::class, 'profile'])->name('dashboard.profile');
    Route::get('/dashboard/profile/upload', [PpdbController::class, 'profileUpload'])->name('dashboard.profile.upload');
    Route::patch('/dashboard/profile/change', [PpdbController::class, 'changeProfile'])->name('dashboard.profile.change');
    Route::get('/dashboard/pembayaran', [PpdbController::class, 'pembayaran'])->name('dashboard.pembayaran');
});