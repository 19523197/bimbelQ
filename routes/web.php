<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\JadwalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/login', function () {
    return view('login', [
        "title" => "login"
    ]);
})->name('login');

Route::get('/', function () {
    return view('login', [
        "title" => "login"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
})->middleware('auth');

Route::get('/presensi_private', [Controller::class, 'presensi_private'])->middleware('auth');

Route::get('/presensi_reguler/{jadwal:id}', [Controller::class, 'presensi_reguler'])->middleware('auth');
Route::post('/presensi_reguler/{jadwal:id}/presensi', [Controller::class, 'presensi_reguler_submit'])->middleware('auth');


Route::get('/jadwal', [JadwalController::class, 'show'])->middleware('auth');

Route::get('/tambah_jadwal', [JadwalController::class, 'create'])->middleware('auth');

Route::get('/gaji', [GajiController::class, 'index'])->middleware('auth');


Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/tambah_jadwal', [JadwalController::class, 'store']);
