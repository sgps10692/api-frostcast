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
     * Show the form for editing the specified resource.
     */
    public function edit(MeteorologicalVariable $meteorologicalVariable)
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
