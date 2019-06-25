<!-- Jumbotron -->
<div class="jumbotron text-center mb-5 pb-5 bck">
	<div class="container">
		<div id="carouselExampleIndicators" class="carousel slide bg-light py-2" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<center><img class="d-block" width="1100" height="455" src="<?= base_url(); ?>/assets/img/ded.jpg" alt="First slide"></center>
				</div>
				<div class="carousel-item">
					<center><img class="d-block" width="1100" height="455" src="<?= base_url(); ?>/assets/img/punis.jpg" alt="Second slide"></center>
				</div>
				<div class="carousel-item">
					<center><img class="d-block" width="1100" height="455" src="<?= base_url(); ?>/assets/img/tig.jpg" alt="Third slide"></center>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
<!-- End Of Jumbotron -->

<!-- Flash Message -->
<div class="container mb-5">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
	<?php if ($this->session->flashdata('flash')) : ?>
	<!-- <div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Pesanan <strong>berhasil </strong>
				<?= $this->session->flashdata('flash'); ?>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	</div>
</div> -->
	<?php endif; ?>
	<!-- End Flash Message -->

	<!-- Card -->
	<div class="row">
	<?php foreach ($jualan as $brg) : ?>
		<div class="col-md mt-2">
			<div class="card">
				<img class="card-img-top mb-3" src="<?= $brg['gambar']; ?>" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">
						<?= $brg['nama']; ?>
					</h5>
					<p class="card-text">
						<?= $brg['deskripsi']; ?>
					</p>
					<a href="<?= base_url();?>/produk/order" class="btn btn-outline-success">Pesan Sekarang!</a>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		
	<!-- End Card -->
