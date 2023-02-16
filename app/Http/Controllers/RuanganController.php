<?php

namespace App\Http\Controllers;

use App\Models\ruangan;
use App\Http\Requests\StoreruanganRequest;
use App\Http\Requests\UpdateruanganRequest;
use App\Models\Pasien;
use App\Models\Visite;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  \App\Http\Requests\StoreruanganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreruanganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function show(ruangan $ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function edit(ruangan $ruangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateruanganRequest  $request
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateruanganRequest $request, ruangan $ruangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(ruangan $ruangan)
    {
        //
    }
}
