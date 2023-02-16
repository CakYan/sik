<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use App\Http\Requests\StorepasienRequest;
use App\Http\Requests\UpdatepasienRequest;
use Illuminate\Support\Facades\DB;

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
    public function store(StorepasienRequest $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nik' => 'required',
            'no_telp' => 'required',
            'no_rm' => 'required',
            'status' => 'required',
        ]);

        $query = DB::table('pasiens')->insert([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'nik' => $request->input('nik'),
            'no_telp' => $request->input('no_telp'),
            'tgl_masuk' => date(now()),
            'no_rm' => $request->input('no_rm'),
            'status' => $request->input('status'),
            'id_bed' => $id
        ]);

        if ($query) {
            return back()->with('berhasil', 'Data telah ditambahkan');
        } else {
            return back()->with('fail', 'Ada sesuatu yang salah');
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
    public function update(UpdatepasienRequest $request, pasien $pasien)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nik' => 'required',
            'no_telp' => 'required',
            'no_rm' => 'required',
            'status' => 'required',
        ]);

        $pasien = Pasien::where('id', $request->input('id'))->update([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'nik' => $request->input('nik'),
            'no_telp' => $request->input('no_telp'),
            'no_rm' => $request->input('no_rm'),
            'status' => $request->input('status'),
        ]);

        if ($pasien) {
            // dd($pasien);
            return back()->with('update', 'Data telah diperbarui');
        } 
        else {
            return back()->with('fail', 'Ada sesuatu yang salah');
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
