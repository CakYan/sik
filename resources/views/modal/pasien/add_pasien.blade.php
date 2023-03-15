@foreach ($pasiens as $pasien)
<div class="modal fade" id="add_pasien{{ $pasien->idBed }}" tabindex="-1">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Input Data Pasien Rawat Inap</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/add_pasien" method="POST">
              @csrf
              <div class="mb-3">
                  <label for="nama" class="form-label">Nama Pasien</label><span
                  class="required">:</span>
                  <input type="text" name="nama" required="required" class="form-control" id="nama"
                  aria-describedby="emailHelp"><span
                  style="color:red">@error('nama'){{ $message }}@enderror</span>
                  <div id="emailHelp" class="form-text">Sesuai dengan KTP
                  </div>
                </div>
                <div class="mb-3">
                  <label for="jk" class="form-label">Jenis Kelamin</label><span
                  class="required">:</span>
                  <select class="form-control" name="jk" id="jk">
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="Tn" name="jk" id="jk">Tn</option>
                    <option value="Ny" name="jk" id="jk">Ny</option>
                    <option value="An" name="jk" id="jk">An</option>
                    <option value="Sdr" name="jk" id="jk">Sdr</option>
                    <option value="Sdri" name="jk" id="jk">Sdri</option>
                  </select>
                  <span style="color:red">@error('jk'){{ $message }}@enderror</span>
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label><span
                  class="required">:</span>
                  <input type="text" name="alamat" required="required" class="form-control" id="alamat"><span
                  style="color:red">@error('alamat'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                  <label for="no_rm" class="form-label">No Rekam Medis</label><span
                  class="required">:</span>
                  <input type="text" name="no_rm" required="required" class="form-control" id="no_rm"><span
                  style="color:red">@error('no_rm'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                <label for="no_rm" class="form-label">NIK</label><span
                class="required">:</span>
                <input type="text" name="nik" required="required" class="form-control" id="nik"><span
                style="color:red">@error('nik'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                <label for="no_rm" class="form-label">No Telepon</label><span
                class="required">:</span>
                <input type="text" name="no_telp" required="required" class="form-control" id="no_telp"><span
                style="color:red">@error('no_telp'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                <label for="no_rm" class="form-label">Status</label><span
                class="required">:</span>
                <input type="text" name="status" required="required" class="form-control" id="status" value="Sedang Rawat Inap">
                <span style="color:red">@error('status'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                <label for="no_rm" class="form-label">Bed</label><span
                class="required">:</span>
                <input type="text" name="id_bed" class="form-control" id="id_bed" value="{{ $pasien->idBed }}"><span
                style="color:red">@error('bed'){{ $message }}@enderror</span>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <button class="btn btn-danger btn-xs" data-dismiss="modal">Kembali</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endforeach