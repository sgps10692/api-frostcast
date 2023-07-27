<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ForecastFrostController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
//Route::apiResource('locations', LocationController::class);

Route::get('/locations', [LocationController::class, 'index']);
Route::get('/locations/{id}', [LocationController::class, 'show']);
Route::post('/locations', [LocationController::class, 'store']);
Route::put('/locations/{id}', [LocationController::class, 'update']);
Route::delete('/locations/{id}', [LocationController::class, 'destroy']);
// Rutas para ForecastFrostController
Route::get('/forecast_frosts', [ForecastFrostController::class, 'index']);
Route::get('/forecast_frosts/{id}', [ForecastFrostController::class, 'show']);
Route::post('/forecast_frosts', [ForecastFrostController::class, 'store']);
Route::put('/forecast_frosts/{id}', [ForecastFrostController::class, 'update']);
Route::delete('/forecast_frosts/{id}', [ForecastFrostController::class, 'destroy']);
