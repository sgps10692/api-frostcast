<?php

namespace App\Http\Controllers;

use App\Models\MeteorologicalValue;
use App\Http\Requests\StoreMeteorologicalValueRequest;
use App\Http\Requests\UpdateMeteorologicalValueRequest;

class MeteorologicalValueController extends Controller
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
    public function store(StoreMeteorologicalValueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MeteorologicalValue $meteorologicalValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MeteorologicalValue $meteorologicalValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMeteorologicalValueRequest $request, MeteorologicalValue $meteorologicalValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MeteorologicalValue $meteorologicalValue)
    {
        //
    }
}
