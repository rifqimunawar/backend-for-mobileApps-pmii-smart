<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\PaslonController;

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

/*
|--------------------------------------------------------------------------
| Client Side
|--------------------------------------------------------------------------
*/

Route::get('/',[PaslonController::class, 'index'])->name('index.home');
Route::get('/dashboard',[PaslonController::class, 'dashboard'])->name('dashboard.home');
Route::post('/store',[PaslonController::class, 'store'])->name('store');
