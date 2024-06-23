<!-- Modal -->
<div class="modal fade" id="editModal-<?= $showJasa['id_jasa'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Jasa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="fungsional/Edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $showJasa['id_jasa'] ?>">
                <div class="input-group mb-3">
                    <input name="nama_jasa" type="text" class="form-control" placeholder="Nama Jasa" aria-label="Nama Jasa" value="<?= $showJasa['nama_jasa'] ?>">
                </div>
                <div class="input-group">
                    <select name="jenis" class="form-select mb-3" aria-label="Default select example" >
                        <option <?php if ($showJasa['jenis'] === 'Multimedia') { echo 'selected'; } ?> value="Multimedia">Multimedia</option>
                        <option <?php if ($showJasa['jenis'] === 'Programming') { echo 'selected'; } ?> value="Programming">Programming</option>
                        <option <?php if ($showJasa['jenis'] === 'Writing') { echo 'selected'; } ?> value="Writing">Writing</option>
                        <option <?php if ($showJasa['jenis'] === 'Gaming') { echo 'selected'; } ?> value="Gaming">Gaming</option>
                        <option <?php if ($showJasa['jenis'] === 'Multimedia') { echo 'selected'; } ?> value="Marketing">Marketing</option>
                    </select>
                </div>
                <p class="mb-0 mt-1">Gambar</p>
                <div class="input-group mb-3">
                    <input name="gambar" type="file" class="form-control" id="inputGroupFile01" >
                </div>
                <div class="input-group">
                    <span class="input-group-text">Deskripsi</span>
                    <textarea name="deskripsi" class="form-control" aria-label="Deskripsi"><?= $showJasa['deskripsi'] ?></textarea>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>