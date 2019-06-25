<div class="container pb-5">
    <br>
    <h3>Halaman Produk</h3>
    <br>
    <div class="row">
        <?php foreach ($jualan as $j) : ?>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/'); ?>fet.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $j['nama']; ?></h5>
                        <p class="card-text"><?= $j['deskripsi']; ?></p>
                    </div>
                </div>
            </div>
            <br>
        <?php endforeach; ?>
    </div>

</div>