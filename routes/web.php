<?php

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

Route::get('/presensi_privat', function () {
    return view('presensi_private', [
        "title" => "presensi"
    ]);
})->middleware('auth');

Route::get('/presensi_reguler', function () {
    return view('presensi_reguler', [
        "title" => "presensi"
    ]);
})->middleware('auth');

Route::get('/jadwal', function (){
    return view('jadwal', [
        "title" => "jadwal"
    ]);
})->middleware('auth');

Route::get('/tambah_jadwal', function (){
    return view('tambah_jadwal', [
        "title" => "Tambah Jadwal"
    ]);
}) -> middleware('auth');


Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
