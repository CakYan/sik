@extends('layout.main')
@extends('layout.header')
@extends('layout.body')
@extends('layout.footer')

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                @if (Session::get('success'))
                    <div class="alert alert-success">
                    {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::get('update'))
                    <div class="alert alert-success">
                    {{ Session::get('update') }}
                    </div>
                @endif
                @if (Session::get('error'))
                    <div class="alert alert-failed">
                    {{ Session::get('error') }}
                    </div>
                @endif
                <div class="bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="mb-0">Ruangan dan Bed</h6>
                    </div>
                    @if (session('username') == 'Admin')
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_pasien">Input Data Pasien</button>
                    @endif
                    {{-- <canvas id="worldwide-sales"></canvas> --}}
                    <div class="container">
                        <div class="row">
                            @foreach ($beds as $bed)
                            @if ($bed->status != "Sudah Rawat Inap")
                            <div class="col-sm-4">
                                <div class="h-100 bg-light rounded p-4">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <h6 class="mb-0">Nomor Bed: {{ $bed->nomor_bed }} - {{ $bed->kategori }}</h6>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                          Kamar: {{ $bed->nama_ruangan }}
                                        </div>
                                        <div class="card-body">
                                          <h5 class="card-title">Data Pasien</h5>
                                            <div class="col-sm-12 col-xl-6">
                                                <div class="bg-light">
                                                    <table class="table table-hover bg-light">
                                                        <tbody>
                                                            <tr>
                                                                <td>Nama</td>
                                                                <td>{{ $bed->nama }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat</td>
                                                                <td>{{ $bed->alamat }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>No RM</td>
                                                                <td>{{ $bed->no_rm }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        @if (session('username') == 'Admin')
                                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#edit_pasien{{ $bed->idPasien }}">Edit</button>
                                        @endif
                                        <button type="button" class="btn btn-info"><a href="/visite/{{ $bed->idPasien }}" style="color: white; text-decoration : none">Visite</a></button>
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