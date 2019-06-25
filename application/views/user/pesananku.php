<div class="container pb-5">
    <br>
    <h3>Halaman Produk</h3>
    <br>
    <div class="row">

        <table class="table table-hover table-dark">
            <tr>
                <td>No</td>
                <td>Pesanan</td>
                <td>Total Harga</td>
                <td>Status</td>
            </tr>
            <?php foreach ($jualan as $j) : ?>
                <tr>
                    <td>

                    </td>
                    <td>
                        <?= $j['jenis_pesanan'] . $j['id']; ?>
                    </td>
                    <td>
                        <?= $j['total_harga'] . $j['id']; ?>
                    </td>
                    <td>
                        <?= $j['status'] . $j['id']; ?>
                    </td>

                </tr>
            <?php endforeach; ?>
        </table>
    </div>

</div>