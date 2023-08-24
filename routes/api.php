<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ForecastFrostController;
use App\Http\Controllers\MeteorologicalVariableController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\PrediccionesController;
use App\Http\Controllers\MeteorologicalValueController;
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

// Rutas para LocationController
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

// Rutas para MeteorologicalVariableController (OPCIONAL)
Route::get('/meteorological_variables', [MeteorologicalVariableController::class, 'index']);
Route::get('/meteorological_variables/{id}', [MeteorologicalVariableController::class, 'show']);
Route::post('/meteorological_variables', [MeteorologicalVariableController::class, 'store']);
Route::put('/meteorological_variables/{id}', [MeteorologicalVariableController::class, 'update']);
Route::delete('/meteorological_variables/{id}', [MeteorologicalVariableController::class, 'destroy']);

// Rutas para ParameterController (OPCIONAL)
Route::get('/parameters', [ParameterController::class, 'index']);
Route::get('/parameters/{id}', [ParameterController::class, 'show']);
Route::post('/parameters', [ParameterController::class, 'store']);
Route::put('/parameters/{id}', [ParameterController::class, 'update']);
Route::delete('/parameters/{id}', [ParameterController::class, 'destroy']);


// Rutas para ParameterController (OPCIONAL)
Route::get('/parameters', [ParameterController::class, 'index']);
Route::get('/parameters/{id}', [ParameterController::class, 'show']);
Route::post('/parameters', [ParameterController::class, 'store']);
Route::put('/parameters/{id}', [ParameterController::class, 'update']);
Route::delete('/parameters/{id}', [ParameterController::class, 'destroy']);



// Rutas

Route::get('/ubicaciones/{ubicacion_id}/predicciones', [PrediccionesController::class,'getPrediccionesPorUbicacion']);


//
Route::post('/meteorological-values', [MeteorologicalValueController::class, 'store']);
