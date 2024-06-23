<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Jasa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="fungsional/Add.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="creator" value="<?= $username ?>">
                <div class="input-group mb-3">
                    <input name="nama_jasa" type="text" class="form-control" placeholder="Nama Jasa" aria-label="Nama Jasa">
                </div>
                <div class="input-group">
                    <select name="jenis" class="form-select mb-3" aria-label="Default select example">
                        <option value="">Semua Jasa</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Programming">Programming</option>
                        <option value="Writing">Writing</option>
                        <option value="Gaming">Gaming</option>
                        <option value="Marketing">Marketing</option>
                    </select>
                </div>
                <p class="mb-0 mt-1">Gambar</p>
                <div class="input-group mb-3">
                    <input name="gambar" type="file" class="form-control" id="inputGroupFile01" >
                </div>
                <div class="input-group">
                    <span class="input-group-text">Deskripsi/Kontak</span>
                    <textarea name="deskripsi" class="form-control" aria-label="Deskripsi"></textarea>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>