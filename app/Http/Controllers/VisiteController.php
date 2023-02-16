<?php

namespace App\Http\Controllers;

use App\Models\visite;
use App\Http\Requests\StorevisiteRequest;
use App\Http\Requests\UpdatevisiteRequest;
use Illuminate\Http\Request;

class VisiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.visite');
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

    public function add_dokter(StorevisiteRequest $request, $id){
        $request->validate([
            'nama_ppa' => 'required',
            'visite' => 'required'
        ]);

        $query = Visite::insert([
            'tgl_visite' => date(now()),
            'nama_ppa' => $request->input('nama_ppa'),
            'visite' => $request->input('visite'),
            'pasien_id' => $id,
            'id_ppa' => 1
        ]);
    }

    public function add_perawat(StorevisiteRequest $request, $id){
        $request->validate([
            'nama_ppa' => 'required',
            'visite' => 'required'
        ]);

        $query = Visite::insert([
            'tgl_visite' => date(now()),
            'nama_ppa' => $request->input('nama_ppa'),
            'visite' => $request->input('visite'),
            'pasien_id' => $id,
            'id_ppa' => 2
        ]);
    }

    public function add_apoteker(StorevisiteRequest $request, $id){
        $request->validate([
            'nama_ppa' => 'required',
            'visite' => 'required'
        ]);

        $query = Visite::insert([
            'tgl_visite' => date(now()),
            'nama_ppa' => $request->input('nama_ppa'),
            'visite' => $request->input('visite'),
            'pasien_id' => $id,
            'id_ppa' => 3
        ]);
    }

    public function add_gizi(StorevisiteRequest $request, $id){
        $request->validate([
            'nama_ppa' => 'required',
            'visite' => 'required'
        ]);

        $query = Visite::insert([
            'tgl_visite' => date(now()),
            'nama_ppa' => $request->input('nama_ppa'),
            'visite' => $request->input('visite'),
            'pasien_id' => $id,
            'id_ppa' => 4
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorevisiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevisiteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function show(visite $visite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function edit(visite $visite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevisiteRequest  $request
     * @param  \App\Models\visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevisiteRequest $request, visite $visite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function destroy(visite $visite)
    {
        //
    }

    public function uploadImage(Request $request){
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '_' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
