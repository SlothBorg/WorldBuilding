<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorehistoriesRequest;
use App\Http\Requests\UpdatehistoriesRequest;
use App\Models\histories;

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
     * @param  \App\Http\Requests\StorehistoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehistoriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function show(histories $histories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function edit(histories $histories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehistoriesRequest  $request
     * @param  \App\Models\histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehistoriesRequest $request, histories $histories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function destroy(histories $histories)
    {
        //
    }
}
