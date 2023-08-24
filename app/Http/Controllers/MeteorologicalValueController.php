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
        //

        $date= now();
        $timestamp = $date->format('Y-m-d');
        $meteorologicalValue = MeteorologicalValue::where('date',   $timestamp)
            ->where('location_id', $request->input('location_id'))
            ->where('parameter_variable_id', $request->input('parameter_variable_id'))
            ->first();

        if (!$meteorologicalValue) {
            $meteorologicalValue = new MeteorologicalValue();

            $meteorologicalValue->parameter_variable_id = $request->input('parameter_variable_id');
            $meteorologicalValue->location_id = $request->input('location_id');
            $meteorologicalValue->value = $request->input('value');

            $meteorologicalValue->save();
        } else {
            $meteorologicalValue->value = $request->input('value');
            $meteorologicalValue->save();
        }

        return response()->json(['message' => 'Predicción guardada con éxito'], 201);
    }


}
