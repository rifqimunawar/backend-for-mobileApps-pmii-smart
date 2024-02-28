<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ReactController::class,'home']);



Route::get('/tiket/create', [TiketController::class,'create'])->name('tiketcreate');
Route::post('/tiket/store', [TiketController::class,'store'])->name('tiketStore');
Route::get('/tiket/getTiket/{tiketID}', [TiketController::class,'getTiket'])->name('getTiket');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:super admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    ROute::get('/dataAdmin', [MainController::class,'index'])->name('dataAdmin');
    ROute::get('/adminCreate', [MainController::class,'create'])->name('adminCreate');
    ROute::post('/adminStore', [MainController::class,'store'])->name('adminStore');
    ROute::get('/adminEdit/{id}', [MainController::class,'edit']);
    ROute::put('/adminUpdate/{id}', [MainController::class,'update'])->name('adminUpdate');
    ROute::delete('/adminDelete/{id}', [MainController::class,'destroy'])->name('destroy');
});


Route::middleware('auth')->group(function () {
  Route::get('/scan-qr', [QRController::class, 'scanQR'])->name('scan.qr');
  Route::post('/qr-scan-result', [QRController::class, 'qrScanResult'])->name('qr.scan.result');

});


require __DIR__.'/auth.php';
