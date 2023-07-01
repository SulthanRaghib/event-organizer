<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OurServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/login', [AuthController::class, 'index'])->name('index');
Route::post('/login-proses', [AuthController::class, 'login'])->name('login-proses');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-proses', [AuthController::class, 'registerProses'])->name('register-proses');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'userHome'])->name('home');
Route::get('/', [HomeController::class, 'userHome'])->name('home');

Route::get('/event', [EventController::class, 'index'])->name('event');

Route::get('/our-service', [OurServiceController::class, 'index'])->name('our-service');
