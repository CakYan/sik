<?php

namespace App\Http\Controllers;

use App\Models\visite;
use App\Http\Requests\StorevisiteRequest;
use App\Http\Requests\UpdatevisiteRequest;
use Illuminate\Http\Request;
use App\Models\Pasien;

class VisiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pasiens = Pasien::find($id);
        $visites = visite::leftjoin('pasiens', 'visites.pasien_id','=', 'pasiens.id')
        ->select('*', 'pasiens.id AS idPasien')->get();
        // return $id;
        return view('content.visite', compact('pasiens', 'visites'));
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

    public function add_dokter(Request $request, $id){
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

        if($query){
            return back()->with('success', 'Catatan Visite Berhasil Ditambahkan');
        }else{
            return back()->with('failed', 'Ada Sesuatu Yang Salah');
        }
    }

    public function add_perawat(Request $request, $id){
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

        if($query){
            return back()->with('success', 'Catatan Visite Berhasil Ditambahkan');
        }else{
            return back()->with('failed', 'Ada Sesuatu Yang Salah');
        }
    }

    public function add_gizi(Request $request, $id){
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

        if($query){
            return back()->with('success', 'Catatan Visite Berhasil Ditambahkan');
        }else{
            return back()->with('failed', 'Ada Sesuatu Yang Salah');
        }
    }

    
    public function add_apoteker(Request $request, $id){
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

        if($query){
            return back()->with('success', 'Catatan Visite Berhasil Ditambahkan');
        }else{
            return back()->with('failed', 'Ada Sesuatu Yang Salah');
        }
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
}
