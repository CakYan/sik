@extends('layout.main')
@extends('layout.header')
@extends('layout.body')
@extends('layout.footer')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light mx-0">
        <div class="col-md-12">
          @if (Session::get('success'))
            <div class="alert alert-success">
              {{ Session::get('success') }}
            </div>
          @endif
          @if (Session::get('failed'))
            <div class="alert alert-failed">
              {{ Session::get('failed') }}
            </div>
          @endif
            <div class="card-group mr-2">
              {{-- Dokter --}}
                <div class="card mt-2 mr-2">
                    <div class="card-header">
                      Dokter
                    </div>
                    <div class="card-body">
                      <form action="/visite_dokter/{{ $pasiens->id }}" method="POST">
                        @csrf
                        <input type="hidden" name="pasien_id" value="{{ $pasiens->id }}">
                        <blockquote class="blockquote mb-0">
                          <input type="text" name="nama_ppa" id="nama_ppa" class="form-control mb-3" placeholder="Ketik Nama Disini" required>
                          <input type="hidden">
                          <textarea name="visite" id="editor" cols="20" rows="10" class="form-control mb-3" placeholder="Ketik Disini" required></textarea>
                        </blockquote>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view_visite_dokter">View Detail</button>
                        @if (session('username') == "Dokter")
                          <button type="submit" class="btn btn-success" style="float: right">Add Visite</button>
                        @endif
                      </form>
                      </div>
                  </div>
                  {{-- End Dokter --}}

                  {{-- Perawat --}}
                  <div class="card mt-2 mr-2">
                    <div class="card-header">
                      Perawat
                    </div>
                    <div class="card-body">
                      <form action="/visite_perawat/{{ $pasiens->id }}" method="POST">
                        @csrf
                        <input type="hidden" name="pasien_id" value="{{ $pasiens->id }}">
                        <blockquote class="blockquote mb-0">
                          <input type="text" name="nama_ppa" id="nama_ppa" class="form-control mb-3" placeholder="Ketik Nama Disini" required>
                          <textarea name="visite" id="editor" cols="20" rows="10" class="form-control mb-3" placeholder="Ketik Disini" required></textarea>
                        </blockquote>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view_visite_perawat">View Detail</button>
                        @if (session('username') == 'Perawat')
                          <button type="submit" class="btn btn-success" style="float: right">Add Visite</button>
                        @endif
                      </form>
                    </div>
                  </div>
                  {{-- End Perawat --}}
                
                  {{-- Gizi --}}
                  <div class="card mt-2 mr-2">
                    <div class="card-header">
                      Gizi
                    </div>
                    <div class="card-body">
                      <form action="/visite_gizi/{{ $pasiens->id }}" method="POST">
                        @csrf
                        <input type="hidden" name="pasien_id" value="{{ $pasiens->id }}">
                        <blockquote class="blockquote mb-0">
                          <input type="text" name="nama_ppa" id="nama_ppa" class="form-control mb-3" placeholder="Ketik Nama Disini" required>
                          <textarea name="visite" id="editor" cols="20" rows="10" class="form-control mb-3" placeholder="Ketik Disini" required></textarea>
                        </blockquote>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view_visite_gizi">View Detail</button>
                        @if (session('username') == 'Gizi')
                          <button type="submit" class="btn btn-success" style="float: right">Add Visite</button>
                        @endif
                      </form>
                    </div>
                  </div>
                  {{-- End Gizi --}}

                  {{-- farmasi --}}
                  <div class="card mt-2 mr-2">
                    <div class="card-header">
                      Farmasi
                    </div>
                    <div class="card-body">
                      <form action="/visite_farmasi/{{ $pasiens->id }}" method="POST">
                        @csrf
                        <input type="hidden" name="pasien_id" value="{{ $pasiens->id }}">
                        <blockquote class="blockquote mb-0">
                          <input type="text" name="nama_ppa" id="nama_ppa" class="form-control mb-3" placeholder="Ketik Nama Disini" required>
                          <textarea name="visite" id="editor" cols="20" rows="10" class="form-control mb-3" placeholder="Ketik Disini" required></textarea>
                        </blockquote>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view_visite_farmasi">View Detail</button>
                        @if (session('username') == 'farmasi')
                          <button type="submit" class="btn btn-success" style="float: right">Add Visite</button>
                        @endif
                      </form>
                    </div>
                  </div>
                  {{-- End farmasi --}}
            </div>
        </div>
    </div>
</div>
@include('modal.visite.add_visite')
@include('modal.visite.view_visite_dokter')
@include('modal.visite.view_visite_perawat')
@include('modal.visite.view_visite_gizi')
@include('modal.visite.view_visite_farmasi')
@endsection