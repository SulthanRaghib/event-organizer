<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\PendaftaranController;
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

// Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/home', [HomeController::class, 'userHome'])->name('home');
Route::get('/', [HomeController::class, 'userHome'])->name('home');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/events/details/{id}', [HomeController::class, 'detailEvent'])->name('events.details');
Route::get('/events/register/{id}', [HomeController::class, 'registerEvent'])->name('events.register');
Route::post('/events/register-proses/{id}', [HomeController::class, 'registerEventProses'])->name('events.register-proses');
Route::get('/our-service', [OurServiceController::class, 'index'])->name('our-service');
Route::get('/login', [AuthController::class, 'index'])->name('index');
Route::post('/login-proses', [AuthController::class, 'login'])->name('login-proses');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-proses', [AuthController::class, 'registerProses'])->name('register-proses');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// buat route group untuk role as admin
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/event', [EventController::class, 'index'])->name('event');
    Route::get('/event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/event/add-event', [EventController::class, 'addEvent'])->name('event.add-event');
    Route::get('/event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
    Route::post('/event/update/{id}', [EventController::class, 'update'])->name('event.update');
    Route::post('/event/delete/{id}', [EventController::class, 'delete'])->name('event.delete');
    Route::get('/event/detail/{id}', [EventController::class, 'detail'])->name('event.detail');
    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
});
