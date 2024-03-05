<?php

use App\Http\Controllers\EventController;
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
Route::get('/event/{id}', [ReactController::class,'eventID']);
Route::get('/event/choice/{id}', [ReactController::class,'event_choise']);


Route::get('/transaction/create', [TiketController::class, 'create'])->name('transaction.create');
Route::post('/transaction/store', [TiketController::class, 'store'])->name('transaction.store');
Route::get('/event/checkout/{qr_code}', [TiketController::class, 'checkout'])->name('tiket.checkout');

Route::get('/testFunction/{qr_code}', [TiketController::class, 'test'])->name('test');


Route::get('/event/checkout/success/pay/{qr_code}/{snap}', [TiketController::class, 'success'])->name('tiket.success');

Route::get('/tiket/create', [TiketController::class,'create'])->name('tiketcreate');
Route::post('/tiket/store', [TiketController::class,'store'])->name('tiketStore');
Route::get('/tiket/getTiket/{tiketID}', [TiketController::class,'getTiket'])->name('getTiket');

Route::get('/dashboard', function () {
    return view('dashboard.admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:super admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dataAdmin', [MainController::class,'index'])->name('dataAdmin');
    Route::get('/adminCreate', [MainController::class,'create'])->name('adminCreate');
    Route::post('/adminStore', [MainController::class,'store'])->name('adminStore');
    Route::get('/adminEdit/{id}', [MainController::class,'edit']);
    Route::put('/adminUpdate/{id}', [MainController::class,'update'])->name('adminUpdate');
    Route::delete('/adminDelete/{id}', [MainController::class,'destroy'])->name('destroy');

    Route::get('/event', [EventController::class,'index'])->name('event.index');
    Route::get('/eventCreate', [EventController::class,'create'])->name('event.create');
    Route::post('/event/store', [EventController::class,'store'])->name('event.store');
    Route::get('/event/edit/{id}', [EventController::class,'edit'])->name('event.edit');
    Route::put('/event/update/{id}', [EventController::class,'update'])->name('event.update');
    Route::delete('/event/delete/{id}', [EventController::class,'destroy'])->name('event.destroy');
});


Route::middleware('auth')->group(function () {
  Route::get('/scan-qr', [QRController::class, 'scanQR'])->name('scan.qr');
  Route::post('/qr-scan-result', [QRController::class, 'qrScanResult'])->name('qr.scan.result');

});


require __DIR__.'/auth.php';
