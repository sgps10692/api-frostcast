<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\MeteorologicalValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function getRecentPredictions($location_id)
    {
        $location = Location::find($location_id);

        if (!$location) {
            return response()->json(['error' => 'Ubicación no encontrada'], 404);
        }

        $recentPredictions = $location->forecast_frosts()
            ->orderBy('date', 'desc')
            ->get();

        $predictionsByMonth = [];

        foreach ($recentPredictions as $prediction) {
            $yearMonth = date('Y-m', strtotime($prediction->date));

            if (!isset($predictionsByMonth[$yearMonth])) {
                $predictionsByMonth[$yearMonth] = [];
            }

            if (count($predictionsByMonth[$yearMonth]) < 3) {
                $predictionsByMonth[$yearMonth][] = $prediction;
            }
        }

        return response()->json([
            'success' => true,
            'location' => $location,
            'predictions_by_month' => $predictionsByMonth,
        ]);
    }
}
