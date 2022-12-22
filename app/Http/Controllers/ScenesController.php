<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorescenesRequest;
use App\Http\Requests\UpdatescenesRequest;
use App\Models\scenes;

class ScenesController extends Controller
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
     * @param  \App\Http\Requests\StorescenesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorescenesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\scenes  $scenes
     * @return \Illuminate\Http\Response
     */
    public function show(scenes $scenes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\scenes  $scenes
     * @return \Illuminate\Http\Response
     */
    public function edit(scenes $scenes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatescenesRequest  $request
     * @param  \App\Models\scenes  $scenes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatescenesRequest $request, scenes $scenes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\scenes  $scenes
     * @return \Illuminate\Http\Response
     */
    public function destroy(scenes $scenes)
    {
        //
    }
}
