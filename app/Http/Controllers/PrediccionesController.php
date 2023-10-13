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
    
        // Obtener la predicción más reciente
        $prediccion_reciente = $ubicacion->forecast_frosts()
            ->latest('date')
            ->first();
    
        // Obtener los valores meteorológicos para la ubicación, incluyendo relaciones
        $latestMeteorologicalValues = MeteorologicalValue::whereIn('id', function ($query) use ($ubicacion_id) {
            $query->select(DB::raw('MAX(id)'))
                ->from('meteorological_values')
                ->where('location_id', $ubicacion_id)
                ->groupBy('parameter_variable_id');
        })
        ->orderBy('date', 'desc') // Ordenar por fecha en orden descendente
        ->with('parameter.variable')
        ->get();
    
    
        return response()->json([
            'success' => true,
            'location' => $ubicacion,
            'prediccion_reciente' =>  $prediccion_reciente,
            'valores_meteorologicos' => $latestMeteorologicalValues
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
