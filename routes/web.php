<?php

use App\Http\Controllers\Controller;
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

Route::get('/presensi_reguler', function () {
    return view('presensi_reguler', [
        "title" => "presensi"
    ]);
})->middleware('auth');

Route::get('/gaji', function () {
    return view('gaji', [
        "title" => "gaji"
    ]);
})->middleware('auth');


Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
