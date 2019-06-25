<div class="container justify-content-center mb-5">

    <div class="row mt-3">
        <div class="col-md-6 mx-auto">

            <div class="card">
                <div class="card-header">
                    Form Pemesanan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php $this->db->get_where('user', ['email' => $this->session->userdata('nama')])->row_array(); ?>" </div> <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?php $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array() ?>">
                        </div>
                        <div class="form-group">
                            <label for="No Telfon">No Telfon</label>
                            <input type="text" class="form-control" id="notelp" name="notelp">
                        </div>
                        <div class="form-group">
                            <p>Jenis Pesanan: </p>
                            <select name="jenis_pesanan" class="form-control">
                                <?php foreach ($jualan as $j) : ?>
                                    <option value="<?= $j['nama']; ?>"><?= $j['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Jumlah Pesanan">Jumlah Pesanan</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah">
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="form-group">
                            <p>Tanggal Dikirim</p>
                            <input type="date" class="form-control" name="tgl_kirim">
                        </div>
                        <button type="submit" class="btn btn-primary float right">Pesan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>