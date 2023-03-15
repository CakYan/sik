<div class="modal fade" id="add_visite" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Visite</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="">
              <input type="text" class="form-control mb-3" name="nama_ppa" placeholder="Nama PPA">
              <textarea name="visite" class="form-control" id="editor1" cols="57" rows="10" placeholder="Ketik Disini"></textarea>
              <button type="button" class="btn btn-success mt-3" style="float: right;">Submit</button>
            </form>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
@push('scripts')
    <script></script>
@endpush