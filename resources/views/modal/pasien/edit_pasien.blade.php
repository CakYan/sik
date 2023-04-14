@foreach ($beds as $bed)
<div class="modal fade" id="edit_pasien{{ $bed->idPasien }}" tabindex="-1">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Data Pasien Rawat Inap</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('update_pasien') }}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{ $bed->idPasien }}">
              <div class="mb-3">
                <label for="no_rm" class="form-label">No Rekam Medis</label>
                <input type="text" class="form-control" maxlength="6" name="no_rm" id="no_rm" value="{{ $bed->no_rm }}"><span
                style="color:red">@error('no_rm'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                  <label for="nama" class="form-label">Nama Pasien</label>
                  <input type="text" class="form-control" name="nama" id="nama"
                  aria-describedby="emailHelp" value="{{ $bed->nama }}"><span
                  style="color:red">@error('nama'){{ $message }}@enderror</span>
                  <div id="emailHelp" class="form-text">Sesuai dengan KTP
                  </div>
              </div>
              <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label><span
                class="required">:</span>
                <input type="date" name="tgl_lahir" required="required" class="form-control" id="tgl_lahir" value="{{ $bed->tgl_lahir }}"><span
                style="color:red">@error('tgl_lahir'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                <label for="no_rm" class="form-label">NIK</label>
                <input type="text" class="form-control" maxlength="16" name="nik" id="nik" value="{{ $bed->nik }}"><span
                style="color:red">@error('nik'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label><span
                class="required">:</span>
                <select class="form-control" name="jk" id="jk">
                  <option value="{{ $bed->jk }}">{{ $bed->jk }}</option>
                  <option value="Tn" name="jk" id="jk">Tn</option>
                  <option value="Ny" name="jk" id="jk">Ny</option>
                  <option value="An" name="jk" id="jk">An</option>
                  <option value="Sdr" name="jk" id="jk">Sdr</option>
                  <option value="Sdri" name="jk" id="jk">Sdri</option>
                </select>
                <span style="color:red">@error('jk'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $bed->alamat }}"><span
                  style="color:red">@error('alamat'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                <label for="no_rm" class="form-label">No Telepon</label>
                <input type="text" class="form-control" maxlength="12" name="no_telp" id="no_telp" value="{{ $bed->no_telp }}"><span
                style="color:red">@error('no_telp'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                <label for="no_rm" class="form-label">Status</label>
                <select class="form-control" name="status" id="status">
                  <option value="{{ $bed->status }}">{{ $bed->status }}</option>
                  <option value="Sedang Rawat Inap">Sedang Rawat Inap</option>
                  <option value="Sudah Rawat Inap">Sudah Rawat Inap</option>  
                </select><span
                style="color:red">@error('status'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                <label for="no_rm" class="form-label">Bed</label>
                <input type="text" class="form-control" name="id_bed" id="id_bed" value="{{ $bed->nomor_bed}}"><span
                style="color:red">@error('bed'){{ $message }}@enderror</span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
		
		var rupiah = document.getElementById('no_rm');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, '');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 2,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{2}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
		}
	</script>
@endforeach