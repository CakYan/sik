<div class="modal fade" id="add_pasien" tabindex="-1">
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
                <label for="no_rm" class="form-label">No Rekam Medis</label><span
                class="required">:</span>
                <input type="text" name="no_rm" required="required" maxlength="6" class="form-control" id="no_rm"><span
                style="color:red">@error('no_rm'){{ $message }}@enderror</span>
              </div>
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
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label><span
                class="required">:</span>
                <input type="date" name="tgl_lahir" required="required" class="form-control" id="tgl_lahir"><span
                style="color:red">@error('tgl_lahir'){{ $message }}@enderror</span>
              </div>
              <div class="mb-3">
                <label for="no_rm" class="form-label">NIK</label><span
                class="required">:</span>
                <input type="text" name="nik" required="required" maxlength="16" class="form-control" id="nik"><span
                style="color:red">@error('nik'){{ $message }}@enderror</span>
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
                <label for="no_rm" class="form-label">No Telepon</label><span
                class="required">:</span>
                <input type="text" name="no_telp" required="required" maxlength="12" class="form-control" id="no_telp"><span
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
                <select class="form-control" name="id_bed" id="id_bed">
                  @foreach ($lists as $list)
                      <option value="{{ $list->id }}">{{ $list->id }} - {{ $list->nama_ruangan }} - {{ $list->kategori }}</option>
                  @endforeach
                </select>
                <span style="color:red">@error('bed'){{ $message }}@enderror</span>
              </div>
              <div class="modal-footer">
                <button class="btn btn-danger btn-xs" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-success">Submit</button>
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