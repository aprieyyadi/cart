<div class="container">

    <div class="row mt-3">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    Form Login
                </div>

                <?= $this->session->flashdata('flash'); ?>

                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <hr>
                            <button type="submit" class="btn btn-primary float right">Login</button>
                            <a href="<?= base_url('home/tambah'); ?>" class="btn btn-success float right">Tambah</a>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>