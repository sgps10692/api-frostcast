<?php

namespace App\Http\Controllers;

use App\Models\MeteorologicalVariable;
use App\Http\Requests\StoreMeteorologicalVariableRequest;
use App\Http\Requests\UpdateMeteorologicalVariableRequest;

class MeteorologicalVariableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meteorological_variable = MeteorologicalVariable::all();
        try {
            return response()->json([
                'success' => true,
                'data' => $meteorological_variable
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMeteorologicalVariableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MeteorologicalVariable $meteorologicalVariable)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMeteorologicalVariableRequest $request, MeteorologicalVariable $meteorologicalVariable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MeteorologicalVariable $meteorologicalVariable)
    {
        //
    }
}
