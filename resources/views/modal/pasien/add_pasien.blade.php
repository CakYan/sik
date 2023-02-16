<div class="modal fade" id="add_pasien{{ $bed->id }}" tabindex="-1">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Input Data Pasien Rawat Inap</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
              @csrf
              <div class="mb-3">
                  <label for="nama" class="form-label">Nama Pasien</label><span
                  class="required">:</span>
                  <input type="text" class="form-control" id="nama"
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
                    <option value="">Tn</option>
                    <option value="">Ny</option>
                    <option value="">An</option>
                  </select>
                  <span style="color:red">@error('jk'){{ $message }}@enderror</span>
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label><span
                  class="required">:</span>
                  <input type="text" class="form-control" id="alamat"><span
                  style="color:red">@error('alamat'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                  <label for="no_rm" class="form-label">No Rekam Medis</label><span
                  class="required">:</span>
                  <input type="number" class="form-control" id="no_rm"><span
                  style="color:red">@error('no_rm'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                <label for="no_rm" class="form-label">NIK</label><span
                class="required">:</span>
                <input type="text" class="form-control" id="nik"><span
                style="color:red">@error('nik'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                <label for="no_rm" class="form-label">No Telepon</label><span
                class="required">:</span>
                <input type="text" class="form-control" id="no_telp"><span
                style="color:red">@error('no_telp'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                <label for="no_rm" class="form-label">Status</label><span
                class="required">:</span>
                <select class="form-control" name="stauts" id="stauts">
                  <option value="">--Pilih Status Pasien--</option>
                  <option value="">Sedang Rawat Inap</option>
                  <option value="">Sudah Rawat Jalan</option>
                </select>
                <span style="color:red">@error('status'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                <label for="no_rm" class="form-label">Bed</label><span
                class="required">:</span>
                <input type="text" class="form-control" id="bed"><span
                style="color:red">@error('bed'){{ $message }}@enderror</span>
              </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Submit</button>
        </div>
      </div>
    </div>
  </div>