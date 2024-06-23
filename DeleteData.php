<!-- Modal -->
<div class="modal fade" id="deleteModal-<?= $showJasa['id_jasa'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Jasa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Anda yakin akan menghapus jasa <?= $showJasa['nama_jasa'] ?>?</p>
                <div class="modal-footer">
                    <a class="btn btn-danger" href="fungsional/Delete.php?id=<?= $showJasa['id_jasa'] ?>">Hapus</a>
                </div>
            </div>
        </div>
    </div>
</div>