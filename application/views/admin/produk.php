<div class="container pb-5">
    <h3>Daftar Makanan</h3>
    <br>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#makanan">Tambah Menu Baru</a>

    <table class="table table-hover table-dark">
        <tr>
            <td>Nama</td>
            <td>Harga</td>
            <td>Deskripsi</td>
            <td>Aksi</td>
        </tr>
        <?php foreach ($jualan as $brg) : ?>
            <tr>
                <td>
                    <?= $brg['nama']; ?>
                </td>
                <td>
                    <?= $brg['harga']; ?>
                </td>
                <td>
                    <?= $brg['deskripsi']; ?>
                </td>
                <td>
                    <a href="<?= base_url('admin/hapusproduk/') . $brg['id']; ?>" class="btn btn-danger btn-sm float-right tombol-hapus"><i class="fa fa-trash"></i></a>
                </td>
                <td><a href="" data-toggle="modal" data-target="#editjajanan" class="btn btn-warning btn-sm float-right">Edit</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="makanan" tabindex="-1" role="dialog" aria-labelledby="makananLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="makananLabel">Tambah Menu Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Makanan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan Harga">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" id="img" name="img" placeholder="Sub Menu Icon">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="desc" name="desc" placeholder="Deskripsi Makanan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editjajanan" tabindex="-1" role="dialog" aria-labelledby="editjajananLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editjajananLabel">Edit Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Makanan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan Harga">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" id="img" name="img" placeholder="Sub Menu Icon">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="desc" name="desc" placeholder="Deskripsi Makanan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>