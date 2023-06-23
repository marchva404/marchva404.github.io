
<div id="carouselInterval" class="carousel slide mt-5 pt-3" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="3000">
      <img src="<?= base_url('assets/img/img_properties/img_carousel/carousel-6.png'); ?>" class="d-block h-500 w-100">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/img_properties/img_carousel/carousel-7.png'); ?>" class="d-block h-500 w-100">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	  <div class="container">
	    <a class="navbar-brand" href="<?= base_url(); ?>">
	      <img src="<?= base_url('assets/img/img_properties/wbs.png'); ?>" class="d-inline-block align-top img-fluid img-w-100">
	    </a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link page-scroll" href="#tentang"><h5 class="my-auto">Tentang</h5></a>
	        <a class="nav-link page-scroll" href="#daftar_laporan"><h5 class="my-auto">Daftar Laporan</h5></a>
	        <a class="nav-link page-scroll" href="#saran"><h5 class="my-auto">Saran</h5></a>
	      </div>
	      <div class="navbar-nav ml-auto">
	        <a class="nav-link btn btn-sm font-weight-bold m-1 btn-login" href="<?= base_url('landing/masuk'); ?>"><i class="fas fa-fw fa-sign-in-alt"></i> MASUK</a>
	        <a class="nav-link btn btn-sm font-weight-bold m-1 btn-danger text-white" href="<?= base_url('landing/daftar'); ?>"><i class="fas fa-fw fa-file-signature"></i> DAFTAR</a>
	      </div>
	    </div>
	  </div>
	</nav>
</header>

<main class="flex-shrink-0">
	<div class="container pb-5">
		<div class="row justify-content-center py-4">
			<div class="col-lg">
				<h4>Tata Cara Pengaduan</h4>
				<div class="row justify-content-center">
					<div class="py-2 col-xl-2 col-lg-3 col-md-3">
						<div class="card">
						  <div class="card-body text-center">
						  	<i class="fas fa-fw fa-file-signature"></i>
							<h4>Daftar</h4>
							<p>Melakukan Pendaftaran, dengan menekan tombol <a href="<?= base_url('landing/daftar'); ?>"> Daftar</a>. Jika sudah mendaftar tekan tombol <a href="<?= base_url('landing/masuk'); ?>"> Masuk</a>.</p>
						  </div>
						</div>
					</div>
					<div class="py-2 col-lg-1 my-auto card-guide">
						<div class="progress rounded-pill">
						  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="py-2 col-xl-2 col-lg-3 col-md-3">
						<div class="card">
						  <div class="card-body text-center">
						  	<i class="fas fa-fw fa-sign-in-alt"></i>
							<h4>Masuk</h4>
							<p>Masuk, dengan mengisi username dan password yang telah Anda buat sebelumnya. Jika belum mendaftar tekan tombol <a href="<?= base_url('landing/daftar'); ?>"> Daftar</a>.</p>
						  </div>
						</div>
					</div>
					<div class="py-2 col-lg-1 my-auto card-guide">
						<div class="progress rounded-pill">
						  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="py-2 col-xl-2 col-lg-3 col-md-3">
						<div class="card">
						  <div class="card-body text-center">
						  	<i class="fas fa-fw fa-exclamation"></i>
							<h4>Pengaduan</h4>
							<p>Pada bagian sidebar tekan menu tambah pengaduan untuk membuat laporan pengaduan.</p>
						  </div>
						</div>
					</div>
					<div class="py-2 col-lg-1 my-auto card-guide">
						<div class="progress rounded-pill">
						  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="py-2 col-xl-2 col-lg-3 col-md-3">
						<div class="card">
						  <div class="card-body text-center">
						  	<i class="fas fa-fw fa-reply"></i>
							<h4>Tanggapan</h4>
							<p>Pada bagian sidebar tekan menu pengaduan untuk melihat seluruh pengaduan yang telah Anda buat. Untuk melihat tanggapan petugas, tekan tombol <button type="button" class="btn btn-xs btn-info"><i class="fas fa-fw fa-reply"></i></button>.</p>
						  </div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="row py-4" id="tentang">
			<div class="col-lg">
				<h4>Tentang</h4>
				<p>Whistleblowing System (WBS) adalah sistem penanganan pengaduan bagi Whistleblower yang memiliki informasi dan ingin melaporkan suatu perbuatan penyimpangan pelaksanaan tugas dan fungsi. WBS ini diperuntukkan terutama untuk seseorang yang ingin melaporkan indikasi tindak pindana korupsi yang terjadi di dalam organisasi tempatnya bekerja, tetapi merasa sungkan atau takut identitasnya terungkap. WBS juga salah satu Dari 7 Elemen Penguatan Pengawasan, yaitu: Gratifikasi; Penerapan SPIP; Pengaduan Masyarakat; Whistleblowing System; Penanganan Benturan Kepentingan; Pembangunan Zona Integritas; dan APIP. </p>
			</div>
		</div>
		<div class="row py-4 justify-content-center" id="saran">
			<div class="col-lg-6 my-2">
				<div class="border p-3 rounded">
					<h4>Saran</h4>
					<p>Berikan saran terbaik Anda.</p>
					<form action="<?= base_url('landing/saran'); ?>" method="post">
						<div class="form-group">
							<label for="nama"><i class="fas fa-fw fa-id-card"></i> Nama Lengkap</label>
							<input type="text" id="nama" class="form-control <?= (form_error('nama')) ? 'is-invalid' : ''; ?>" name="nama" required value="<?= set_value('nama'); ?>">
							<div class="invalid-feedback">
			          <?= form_error('nama'); ?>
			        </div>
						</div>
						<div class="form-group">
							<label for="no_telepon"><i class="fas fa-fw fa-phone"></i> No. Telepon</label>
							<input type="number" id="no_telepon" class="form-control <?= (form_error('no_telepon')) ? 'is-invalid' : ''; ?>" name="no_telepon" required placeholder="contoh: 08123456789" value="<?= set_value('no_telepon'); ?>">
							<div class="invalid-feedback">
	              <?= form_error('no_telepon'); ?>
	            </div>
						</div>
						<div class="form-group">
							<label for="alamat"><i class="fas fa-fw fa-map-marker-alt"></i> Alamat</label>
							<textarea id="alamat" class="form-control <?= (form_error('alamat')) ? 'is-invalid' : ''; ?>" name="alamat" required><?= set_value('alamat'); ?></textarea>
							<div class="invalid-feedback">
            		<?= form_error('alamat'); ?>
          		</div>
						</div>
						
		</div>
	</div>
</main>

