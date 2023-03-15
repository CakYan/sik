<div class="modal fade" id="view_visite_gizi" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Visite</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-control">
              @foreach ($visites as $visite)
                @if ($pasiens->id == $visite->pasien_id && $visite->id_ppa == 3)
                  - {{ $visite->visite }} by {{ $visite->nama_ppa }} at {{ $visite->tgl_visite }} <br>
                @endif
              @endforeach
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>