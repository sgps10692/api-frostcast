<?php

namespace App\Http\Controllers;

use App\Models\ForecastFrost;
use App\Http\Requests\StoreForecastFrostRequest;
use App\Http\Requests\UpdateForecastFrostRequest;

class ForecastFrostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forecast_frosts = ForecastFrost::all();
        return response()->json([
            'success' => true,
            'data' => $forecast_frosts
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreForecastFrostRequest $request)
    {
        //
        $forecast_frost = new ForecastFrost();
        $forecast_frost->location_id = $request->input('location_id');
        $forecast_frost->probability = $request->input('probability');
        $forecast_frost->save();
        return response()->json([
            'success' => true,
            'data' => $forecast_frost
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ForecastFrost $forecastFrost)
    {
        //
        return response()->json([
            'success' => true,
            'data' => $forecastFrost
        ]);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateForecastFrostRequest $request, ForecastFrost $forecast_frost)
    {
        //
        $forecast_frost->location_id = $request->input('location_id');
        $forecast_frost->probability = $request->input('probability');
        $forecast_frost->save();
        return response()->json([
            'success' => true,
            'data' => $forecast_frost
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ForecastFrost $forecastFrost)
    {
        try {
            $forecastFrost->delete();
            return response()->json([
                'success' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }
}
