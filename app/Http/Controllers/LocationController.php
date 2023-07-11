<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $locations = Location::all();
        return response()->json($locations);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLocationRequest $request)
    {
        //
        $input = $request->all();
        $location = Location::create($input);
        return response()->json($location);
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
        return response()->json($location);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLocationRequest $request, Location $location)
    {
        //
        $location->update($request->all());
        return response()->json($location);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        //
        $location->delete();
        return response()->json(null, 204);
    }
}
