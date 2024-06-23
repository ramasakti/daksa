<!-- Modal -->
<div class="modal fade" id="detailModal-<?= $showJasa['id_jasa'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Jasa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card" style="width: 18rem;">
                <img src="assets/<?= $showJasa['gambar'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $showJasa['nama_jasa'] ?></h5>
                    <p class="card-text"><b><?= $showJasa['creator'] ?></b></p>
                    <p class="card-text"><?= $showJasa['deskripsi'] ?></p>
                </div>
            </div>
            <?php
                $creator = $showJasa['creator'];
                $dataCreator = mysqli_query($koneksi, "SELECT nope FROM user WHERE username = '$creator'");
                $showCreator = mysqli_fetch_array($dataCreator);
            ?>
            <div class="modal-footer mt-3">
                <a href="https://wa.me/<?= $showCreator['nope'] ?>" class="btn btn-primary">Hubungi Penjual</a>
            </div>
        </div>
    </div>
</div>