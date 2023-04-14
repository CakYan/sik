<?php

namespace App\Http\Controllers;

use App\Models\bed;
use App\Http\Requests\StorebedRequest;
use App\Http\Requests\UpdatebedRequest;
use App\Models\Pasien;
use App\Models\Visite;
use Illuminate\Support\Facades\DB;

class BedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beds = DB::table('beds')
        ->join('ruangans', 'beds.id_ruangan', '=', 'ruangans.id')
        ->leftJoin('pasiens', 'beds.id', '=', 'pasiens.id_bed')
        ->select(
            'pasiens.id AS idPasien','pasiens.nama', 'pasiens.jk','pasiens.alamat','pasiens.no_rm', 'pasiens.nik', 'pasiens.no_telp', 'pasiens.status', 'pasiens.id_bed', 'pasiens.tgl_lahir',
            'beds.id AS idBed','beds.nomor_bed',
            'ruangans.nama_ruangan', 'ruangans.kategori'
        )
        ->where(function ($query) {
            $query->where('beds.status_bed', '!=', 0);
        })
        ->orderBy('beds.id', 'ASC')
        ->get();

        $lists = DB::table('beds')
        ->join('ruangans', 'beds.id_ruangan', '=', 'ruangans.id')
        ->select('beds.id', 'ruangans.nama_ruangan', 'ruangans.kategori')
        ->where('status_bed', '=', 0)->get();
        return view('content.bed', compact('beds', 'lists'));
        // return $beds;
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
     * @param  \App\Http\Requests\StorebedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function show(bed $bed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function edit(bed $bed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebedRequest  $request
     * @param  \App\Models\bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebedRequest $request, bed $bed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function destroy(bed $bed)
    {
        //
    }
}
