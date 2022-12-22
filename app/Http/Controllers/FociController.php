<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorefociRequest;
use App\Http\Requests\UpdatefociRequest;
use App\Models\foci;

class FociController extends Controller
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
     * @param  \App\Http\Requests\StorefociRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefociRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\foci  $foci
     * @return \Illuminate\Http\Response
     */
    public function show(foci $foci)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\foci  $foci
     * @return \Illuminate\Http\Response
     */
    public function edit(foci $foci)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefociRequest  $request
     * @param  \App\Models\foci  $foci
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefociRequest $request, foci $foci)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\foci  $foci
     * @return \Illuminate\Http\Response
     */
    public function destroy(foci $foci)
    {
        //
    }
}
