<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreperiodsRequest;
use App\Http\Requests\UpdateperiodsRequest;
use App\Models\periods;

class PeriodsController extends Controller
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
     * @param  \App\Http\Requests\StoreperiodsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreperiodsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\periods  $periods
     * @return \Illuminate\Http\Response
     */
    public function show(periods $periods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\periods  $periods
     * @return \Illuminate\Http\Response
     */
    public function edit(periods $periods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateperiodsRequest  $request
     * @param  \App\Models\periods  $periods
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateperiodsRequest $request, periods $periods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\periods  $periods
     * @return \Illuminate\Http\Response
     */
    public function destroy(periods $periods)
    {
        //
    }
}
