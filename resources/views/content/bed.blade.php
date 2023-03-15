@extends('layout.main')
@extends('layout.header')
@extends('layout.body')
@extends('layout.footer')

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Ruangan dan Bed</h6>
                    </div>
                    {{-- <canvas id="worldwide-sales"></canvas> --}}
                    <div class="container">
                        <div class="row">
                            @foreach ($pasiens as $pasien)
                            @if ($pasien->status != "Sudah Rawat Inap")
                            <div class="col-sm-4">
                                <div class="h-100 bg-light rounded p-4">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <h6 class="mb-0">Nomor Bed: {{ $pasien->nomor_bed }}</h6>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                          Kamar: {{ $pasien->nama_ruangan }}
                                          <button class="btn btn-success" style="float: right" type="button" data-bs-toggle="modal" data-bs-target="#edit_pasien{{ $pasien->idPasien }}">Edit</button>
                                        </div>
                                        <div class="card-body">
                                          <h5 class="card-title">Data Pasien</h5>
                                          @if ($pasien->nama != null && $pasien->status == "Sedang Rawat Inap")      
                                            <div class="col-sm-12 col-xl-6">
                                                <div class="bg-light">
                                                    <table class="table table-hover bg-light">
                                                        <tbody>
                                                            <tr>
                                                                <td>Nama</td>
                                                                <td>{{ $pasien->nama }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat</td>
                                                                <td>{{ $pasien->alamat }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>No RM</td>
                                                                <td>{{ $pasien->no_rm }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                          @else
                                            <div class="">Kamar Kosong</div>
                                          @endif                     
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_pasien{{ $pasien->idBed }}">Input Data Pasien</button>
                                        <button type="button" class="btn btn-info"><a href="/visite/{{ $pasien->idPasien }}" style="color: white; text-decoration : none">Visite</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>                          
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4"></div>
            </div>
        </div>
    </div>
@include('modal.pasien.add_pasien')
@include('modal.pasien.edit_pasien')
@endsection