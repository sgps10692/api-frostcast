<?php

namespace App\Http\Controllers;

use App\Models\ForecastWeatherData;
use App\Http\Requests\StoreForecastWeatherDataRequest;
use App\Http\Requests\UpdateForecastWeatherDataRequest;

class ForecastWeatherDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreForecastWeatherDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ForecastWeatherData $forecastWeatherData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ForecastWeatherData $forecastWeatherData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateForecastWeatherDataRequest $request, ForecastWeatherData $forecastWeatherData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ForecastWeatherData $forecastWeatherData)
    {
        //
    }
}
