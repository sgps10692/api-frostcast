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
    
        // Obtener los valores meteorológicos históricos para la ubicación
        $historicalMeteorologicalValues = MeteorologicalValue::where('location_id', $ubicacion_id)
            ->orderBy('date', 'asc')
            ->with('parameter.variable')
            ->get();
    
        // Organizar los datos en un formato adecuado para el gráfico histórico
        $chartData = [
            'location' => $ubicacion,
            'data' => [],
        ];
    
        foreach ($historicalMeteorologicalValues as $value) {
            $variableName = $value->parameter->variable->name;
            $parameterName = $value->parameter->name;
            $date = $value->date;
            $value = $value->value;
    
            // Agrupar los valores por variable y parámetro
            $chartData['data'][$variableName][$parameterName][] = [
                'date' => $date,
                'value' => $value,
            ];
        }
    
        return response()->json([
            'success' => true,
            'chart_data' => $chartData,
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
