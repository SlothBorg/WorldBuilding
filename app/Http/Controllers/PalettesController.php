<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepalettesRequest;
use App\Http\Requests\UpdatepalettesRequest;
use App\Models\palettes;

class PalettesController extends Controller
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
     * @param  \App\Http\Requests\StorepalettesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepalettesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\palettes  $palettes
     * @return \Illuminate\Http\Response
     */
    public function show(palettes $palettes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\palettes  $palettes
     * @return \Illuminate\Http\Response
     */
    public function edit(palettes $palettes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepalettesRequest  $request
     * @param  \App\Models\palettes  $palettes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepalettesRequest $request, palettes $palettes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\palettes  $palettes
     * @return \Illuminate\Http\Response
     */
    public function destroy(palettes $palettes)
    {
        //
    }
}
