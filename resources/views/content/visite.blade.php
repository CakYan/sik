@extends('layout.main')
@extends('layout.header')
@extends('layout.body')
@extends('layout.footer')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-light mx-0">
        <div class="col-md-12">
            <div class="card-group mr-2">
              {{-- Dokter --}}
                <div class="card mt-2 mr-2">
                    <div class="card-header">
                      Dokter
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <textarea name="text" id="editor" cols="20" rows="10"></textarea>
                      </blockquote>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#view_visite">View Detail</button>
                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add_visite">Add Visite</button>
                    </div>
                  </div>
                  {{-- End Dokter --}}

                  {{-- Perawat --}}
                  <div class="card mt-2 mr-2">
                    <div class="card-header">
                      Perawat
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <textarea name="text" id="editor" cols="20" rows="10"></textarea>
                      </blockquote>
                      <button type="button" class="btn btn-primary">View Detail</button>
                      <button type="button" class="btn btn-success">Add Visite</button>
                    </div>
                  </div>
                  {{-- End PErawat --}}
                
                  {{-- Gizi --}}
                  <div class="card mt-2 mr-2">
                    <div class="card-header">
                      Gizi
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <textarea name="text" id="editor" cols="20" rows="10"></textarea>
                      </blockquote>
                      <button type="button" class="btn btn-primary">View Detail</button>
                      <button type="button" class="btn btn-success">Add Visite</button>
                    </div>
                  </div>
                  {{-- End Gizi --}}

                  {{-- Apoteker --}}
                  <div class="card mt-2 mr-2">
                    <div class="card-header">
                      Apoteker
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <textarea name="text" id="editor" cols="20" rows="10"></textarea>
                      </blockquote>
                      <button type="button" class="btn btn-primary">View Detail</button>
                      <button type="button" class="btn btn-success">Add Visite</button>
                    </div>
                  </div>
                  {{-- End Apoteker --}}
            </div>
        </div>
    </div>
</div>
@include('modal.visite.add_visite')
@include('modal.visite.view_visite')
{{-- @push('script')
    <script></script>
@endpush --}}
@endsection