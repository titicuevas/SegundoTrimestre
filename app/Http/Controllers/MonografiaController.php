<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremonografiaRequest;
use App\Http\Requests\UpdatemonografiaRequest;
use App\Models\monografia;

class MonografiaController extends Controller
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
     * @param  \App\Http\Requests\StoremonografiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremonografiaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function show(monografia $monografia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function edit(monografia $monografia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemonografiaRequest  $request
     * @param  \App\Models\monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemonografiaRequest $request, monografia $monografia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function destroy(monografia $monografia)
    {
        //
    }
}
