<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecharactersRequest;
use App\Http\Requests\UpdatecharactersRequest;
use App\Models\characters;

class CharactersController extends Controller
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
     * @param  \App\Http\Requests\StorecharactersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecharactersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function show(characters $characters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function edit(characters $characters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecharactersRequest  $request
     * @param  \App\Models\characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecharactersRequest $request, characters $characters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function destroy(characters $characters)
    {
        //
    }
}
