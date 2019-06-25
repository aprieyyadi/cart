<div class="container pb-5">
    <h3>Daftar Order</h3>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
    <ul class="list-group">

        <table class="table table-hover">
            <tr>
                <td>No Order</td>
                <td>Nama</td>
                <td>No Telfon</td>
                <td>Alamat</td>
                <td>Jenis Pesanan</td>
                <td>Jumlah Pesanan</td>
                <td>Total Harga</td>
                <td>Tanggal Order</td>
                <td>Tanggal Pengiriman</td>
                <td>Status</td>
                <td>Aksi</td>
            </tr>
            <?php foreach ($order as $ord) : ?>
                <tr>
                    <td><?= $ord['no_order']; ?></td>
                    <td><?= $ord['nama']; ?></td>
                    <td><?= $ord['notelp']; ?></td>
                    <td><?= $ord['alamat']; ?></td>
                    <td><?= $ord['jenis_pesanan']; ?></td>
                    <td><?= $ord['jumlah']; ?></td>
                    <td><?= $ord['total_harga']; ?></td>
                    <td><?= $ord['tgl_order']; ?></td>
                    <td><?= $ord['tgl_kirim']; ?></td>
                    <td><?= $ord['status']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>order/hapus/<?= $ord['no_order']; ?> " class="badge badge-danger float-right tombol-hapus">Hapus</a>
                        <a href="<?= base_url(); ?>order/edit/<?= $ord['no_order']; ?> " class="badge badge-success float-right tombol-hapus">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>


    </ul>
</div>