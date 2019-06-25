<div class="container justify-content-center">

    <div class="row mt-3">
        <div class="col-md-6 mx-auto">

            <div class="card">
                <div class="card-header">
                    Form Registrasi
                </div>
                <div class="card-body">
                    <form action="<?= base_url('home/tambah') ?>" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Repeat Password</label>
                            <input type="password" class="form-control" id="password2" name="password2">
                        </div>
                        <button type="submit" class="btn btn-primary float right">Tambah</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div> 