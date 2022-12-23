<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHistoriesRequest;
use App\Http\Requests\UpdateHistoriesRequest;
use App\Models\Histories;

class HistoriesController extends Controller
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
     * @param  \App\Http\Requests\StoreHistoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHistoriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function show(Histories $histories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function edit(Histories $histories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHistoriesRequest  $request
     * @param  \App\Models\Histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHistoriesRequest $request, Histories $histories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Histories $histories)
    {
        //
    }
}
