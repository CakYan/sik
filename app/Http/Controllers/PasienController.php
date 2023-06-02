<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use App\Models\bed;
use App\Http\Requests\StorepasienRequest;
use App\Http\Requests\UpdatepasienRequest;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;

class PasienController extends Controller
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
     * @param  \App\Http\Requests\StorepasienRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'nik' => 'required|unique:pasiens',
            'no_telp' => 'required|unique:pasiens',
            'no_rm' => 'required|unique:pasiens|max:8',
            'status' => 'required',
            'tgl_lahir' => 'required'
        ]);

        try {
            $query = pasien::create([
                'nama' => $request->input('nama'),
                'jk' =>$request->input('jk'),
                'alamat' => $request->input('alamat'),
                'nik' => $request->input('nik'),
                'no_telp' => $request->input('no_telp'),
                'tgl_masuk' => date(now()),
                'no_rm' => $request->input('no_rm'),
                'status' => $request->input('status'),
                'id_bed' => $request->input('id_bed'),
                'tgl_lahir' => $request->input('tgl_lahir')
            ]);

            $bed = bed::find($request->input('id_bed'))->update([
                'status_bed' => 1
            ]);

            return back()->with('success', 'Data telah ditambahkan'); 
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while adding data: '.$e->getMessage());
        }       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(pasien $pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepasienRequest  $request
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepasienRequest $request)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'nik' => 'required',
            'no_telp' => 'required',
            'no_rm' => 'required',
            'status' => 'required',
            'tgl_lahir' => 'required'
        ]);

        try {
            $pasien = Pasien::where('id', $request->input('id'))->update([
                'nama' => $request->input('nama'),
                'jk' => $request->input('jk'),
                'alamat' => $request->input('alamat'),
                'nik' => $request->input('nik'),
                'no_telp' => $request->input('no_telp'),
                'no_rm' => $request->input('no_rm'),
                'status' => $request->input('status'),
                'tgl_lahir' => $request->input('tgl_lahir')
            ]);
            if ($request->input('status') == 'Sudah Rawat Inap') {
                $bed = bed::find($request->input('id_bed'))->update([
                    'status_bed' => 0
                ]);
            }
            return back()->with('update', 'Data telah diperbarui');
        } catch (\Throwable $th) {
            return back()->with('error', 'An error occurred while adding data: '.$th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(pasien $pasien)
    {
        //
    }
}
