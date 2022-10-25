<!-- Jumbotron Start -->

<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h4 class="text-white judul">Kebaikan Dimulai Dari Hal Sederhana <br> Yuk Bantu Saudara Kita!</h4>
		<button href="" class="btn btn-judul btn-ungu font-weight-bold">Buat Campaign</button>
		<button href="" class="btn btn-judul btn-primary font-weight-bold">Join Supplier</button>
	</div>
	<div class="row col-lg-12 bg-kotak">
		<div class="col-sm-2 offset-sm-2">
			<p class="text-white">100<br>Campaign Terdanai</p>
		</div>
		<div class="col-sm-2">
			<p class="text-white">549<br>Campaign Menunggu</p>
		</div>
		<div class="col-sm-2">
			<p class="text-white">2.103<br>Donatur Telah Bergabung</p>
		</div>
		<div class="col-sm-2">
			<p class="text-white">59<br>Supplier Produk dan Jasa</p>
		</div>
	</div>
</div>

<!-- Jumbotron End -->

<!-- Donasi Produk Start -->

<div class="container">
	<div class="card">
		<div class="card-header bg-primary text-white font-weight-bold">
			Donasi Barang
		</div>
		<div class="card-body">
			<div class="row">
				<?php foreach ($donasiBarang as $db) : ?>
					<div class="col">
						<div class="card" style="width: 18rem;">
							<img src="<?= base_url('assets/img/donasi/') . $db['gambar_donasi'] ?>" class="card-img-top" alt="<?= $db['judul_donasi'] ?>">
							<div class="card-body text-center">
								<h6 class="text-primary"><?= $db['judul_donasi'] ?></h6>
								<p class="card-text"><?= $db['nama_user'] ?></p>
								<p class="card-text text-primary">Sisa 50% dari target Campaign</p>
							</div>
							<a href="<?= base_url('home/detail/') . $db['id_donasi']; ?>" class="btn btn-primary">Bantu Sekarang</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="row">
			<a href="<?= base_url(); ?>donasi_barang" class="btn btn-primary tombol-lebih">Lihat Lebih Banyak</a>
		</div>
	</div>
</div>

<!-- Donasi Produk End -->

<!-- Donasi Jasa Start -->

<div class="container body-primary">
	<div class="card">
		<div class="card-header text-white font-weight-bold bg-ungu">
			Donasi Jasa
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<div class="card" style="width: 18rem;">
						<img src="assets/img/d_produk1.jpg" class="card-img-top" alt="Renovasi Masjid Al-Hidayah Medan">
						<div class="card-body text-center">
							<h6 class="text-ungu">Renovasi Masjid Al-Hidayah Medan</h6>
							<p class="card-text">Abdul Ghofur</p>
							<p class="card-text text-ungu">Sisa 50% dari target Campaign</p>
						</div>
						<button href="" class="btn btn-ungu">Bantu Sekarang</button>
					</div>
				</div>
				<div class="col">
					<div class="card" style="width: 18rem;">
						<img src="assets/img/d_produk1.jpg" class="card-img-top" alt="Renovasi Masjid Al-Hidayah Medan">
						<div class="card-body text-center">
							<h6 class="text-ungu">Renovasi Masjid Al-Hidayah Medan</h6>
							<p class="card-text">Abdul Ghofur</p>
							<p class="card-text text-ungu">Sisa 50% dari target Campaign</p>
						</div>
						<button href="" class="btn btn-ungu">Bantu Sekarang</button>
					</div>
				</div>
				<div class="col">
					<div class="card" style="width: 18rem;">
						<img src="assets/img/d_produk1.jpg" class="card-img-top" alt="Renovasi Masjid Al-Hidayah Medan">
						<div class="card-body text-center">
							<h6 class="text-ungu">Renovasi Masjid Al-Hidayah Medan</h6>
							<p class="card-text">Abdul Ghofur</p>
							<p class="card-text text-ungu">Sisa 50% dari target Campaign</p>
						</div>
						<button href="" class="btn btn-ungu">Bantu Sekarang</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<a href="<?= base_url(); ?>donasi_jasa" class="btn btn-ungu tombol-lebih">Lihat Lebih Banyak</a>
		</div>
	</div>
</div>


<!-- Donasi Jasa End -->