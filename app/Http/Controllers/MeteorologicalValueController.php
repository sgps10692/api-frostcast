<?php

namespace App\Http\Controllers;

use App\Models\MeteorologicalValue;
use App\Http\Requests\StoreMeteorologicalValueRequest;
use App\Http\Requests\UpdateMeteorologicalValueRequest;

class MeteorologicalValueController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMeteorologicalValueRequest $request)
    {
        // Obtiene los datos de la solicitud
        $parameter_variable_id = $request->input('parameter_variable_id');
        $location_id = $request->input('location_id');
        $value = $request->input('value');
    
        // Obtiene la fecha actual
        $date = now();
        $timestamp = $date->format('Y-m-d');


        // Si no existe, crea un nuevo registro
        $meteorologicalValue = new MeteorologicalValue();
        $meteorologicalValue->parameter_variable_id = $parameter_variable_id;
        $meteorologicalValue->location_id = $location_id;
        $meteorologicalValue->value = $value;
    /*
  
        $meteorologicalValue = MeteorologicalValue::where('date', $timestamp)
            ->where('location_id', $location_id)
            ->where('parameter_variable_id', $parameter_variable_id)
            ->first();
    
        if (!$meteorologicalValue) {
          
            $meteorologicalValue = new MeteorologicalValue();
            $meteorologicalValue->parameter_variable_id = $parameter_variable_id;
            $meteorologicalValue->location_id = $location_id;
            $meteorologicalValue->value = $value;
        } else {
        
            $meteorologicalValue->value = $value;
        }
    */
        // Guarda el registro
        $meteorologicalValue->save();
    
        return response()->json(['message' => 'Predicción guardada con éxito'], 200);
    }
    

}
