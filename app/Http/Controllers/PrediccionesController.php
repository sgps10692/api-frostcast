<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\MeteorologicalValue;
use Illuminate\Http\Request;

class PrediccionesController extends Controller
{
    //
    public function getPrediccionesPorUbicacion($ubicacion_id){

        $ubicacion = Location::find($ubicacion_id);

        if (!$ubicacion) {
            return response()->json(['error' => 'Ubicación no encontrada'], 404);
        }

        $prediccion_reciente = $ubicacion->forecast_frosts()
            ->orderBy('date', 'desc')
            ->first();


        // Obtener los valores meteorológicos para la ubicación, incluyendo relaciones
        $valores_meteorologicos = MeteorologicalValue::with('parameter.variable')
            ->where('location_id', $ubicacion_id)
            ->orderBy('date', 'desc')
            ->get();
        //logica para hacer un fetch a python



        return response()->json([
            'success' => true,
            'location' => $ubicacion,
            'prediccion_reciente' =>  $prediccion_reciente,
            'valores_meteorologicos' => $valores_meteorologicos
        ]);
    }
}
