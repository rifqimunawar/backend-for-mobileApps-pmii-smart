<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home',[ApiController::class, 'home']);


Route::get('/suaraSatu',[ApiController::class, 'suaraSatu']);
Route::get('/totalSuaraSatu',[ApiController::class, 'totalSuaraSatu']);
Route::get('/suaraDua',[ApiController::class, 'suaraDua']);
Route::get('/totalSuaraDua',[ApiController::class, 'totalSuaraDua']);
Route::get('/suaraTiga',[ApiController::class, 'suaraTiga']);
Route::get('/totalSuaraTiga',[ApiController::class, 'totalSuaraTiga']);
