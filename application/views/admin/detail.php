<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Featured
				</div>
				<div class="card-body">
					<h5 class="card-title">
						<?= $order['nama']; ?>
					</h5>
					<h6 class="card-subtitle mb-2 text-muted">
						<?= $order['email']; ?>
					</h6>
					<p class="card-text">
						<?= $order['notelp']; ?>
					</p>
					<p class="card-text">
						<?= $order['jenis_pesanan']; ?>
					</p>
					<p class="card-text">
						<?= $order['jumlah']; ?>
					</p>
					<p class="card-text">
						<?= $order['alamat']; ?>
					</p>
					<a href="<?= base_url(); ?>order" class="btn btn-primary">Kembali</a>
				</div>
			</div>

		</div>
	</div>
</div>