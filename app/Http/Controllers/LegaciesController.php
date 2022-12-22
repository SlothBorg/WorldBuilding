<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelegaciesRequest;
use App\Http\Requests\UpdatelegaciesRequest;
use App\Models\legacies;

class LegaciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorelegaciesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelegaciesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\legacies  $legacies
     * @return \Illuminate\Http\Response
     */
    public function show(legacies $legacies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\legacies  $legacies
     * @return \Illuminate\Http\Response
     */
    public function edit(legacies $legacies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelegaciesRequest  $request
     * @param  \App\Models\legacies  $legacies
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelegaciesRequest $request, legacies $legacies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\legacies  $legacies
     * @return \Illuminate\Http\Response
     */
    public function destroy(legacies $legacies)
    {
        //
    }
}
