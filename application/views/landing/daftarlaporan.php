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
	        <a class="nav-link page-scroll" href="<?= base_url('landing/'); ?>#tentang"><h5 class="my-auto">Tentang</h5></a>
	        <a class="nav-link page-scroll" href="<?= base_url('landing/'); ?>#daftar_laporan"><h5 class="my-auto">Daftar Laporan</h5></a>
	        <a class="nav-link page-scroll" href="<?= base_url('landing/'); ?>#saran"><h5 class="my-auto">Saran</h5></a>
	      </div>
	      <div class="navbar-nav ml-auto">
	        <a class="nav-link btn btn-sm font-weight-bold m-1 btn-login" href="<?= base_url('landing/masuk'); ?>"><i class="fas fa-fw fa-sign-in-alt"></i> MASUK</a>
	        <a class="nav-link btn btn-sm font-weight-bold m-1 btn-danger text-white" href="<?= base_url('landing/daftar'); ?>"><i class="fas fa-fw fa-file-signature"></i> DAFTAR</a>
	      </div>
	    </div>
	  </div>
	</nav>
</header>

<div class="row py-4" id="daftar_laporan">
			<div class="col-lg">
				<h4>Daftar Laporan</h4>
				<p class="text-justify">Berikut adalah daftar pengaduan-pengaduan berdasarkan terbaru:</p>
				<div class="table-responsive">
					<table class="table table-bordered" id="table_id">
						<thead class="thead-dark">
							<tr>
								<th class="align-middle">No.</th>
								<th class="align-middle">Pelapor</th>
								<th class="align-middle">Tanggal Pengaduan</th>
								<th class="align-middle">Isi Laporan</th>
								<th class="align-middle">Lokasi</th>
								<th class="align-middle">Foto</th>
								<th class="align-middle">Status</th>
								<th class="align-middle">Tangapan</th>
								<th class="align-middle">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($pengaduan as $dp): ?>
								<?php 
									$getTanggapan = $this->db->order_by('tanggapan.id_tanggapan', 'desc')->get_where('tanggapan', ['id_pengaduan' => $dp['id_pengaduan']])->row_array();
									$status = explode('_', $dp['status_pengaduan']);
									$status = implode(' ', $status);
									$status = ucwords($status);
								?>
								<tr>
									<td class="align-middle"><?= $i++; ?></td>
									<td class="align-middle"><?= $dp['username']; ?></td>
									<td class="align-middle"><?= $dp['tgl_pengaduan']; ?></td>
									<td class="align-middle"><?= $dp['isi_laporan']; ?></td>
									<td class="align-middle text-center">
										<a href="<?= base_url('assets/img/img_pengaduan/') . $dp['foto']; ?>" class="enlarge">
											<img src="<?= base_url('assets/img/img_pengaduan/') . $dp['foto']; ?>" class="img-fluid img-w-75-hm-100" alt="<?= $dp['foto']; ?>">
										</a>
									</td>
									<td class="align-middle">
										<?php if ($dp['status_pengaduan'] == 'proses'): ?>
											<button type="button" class="btn btn-sm text-center btn-danger"><i class="fas fa-fw fa-sync"></i> <?= $status; ?></button>
										<?php elseif ($dp['status_pengaduan'] == 'valid'): ?>
											<button type="button" class="btn btn-sm text-center btn-success"><i class="fas fa-fw fa-check"></i> <?= $status; ?></button>
										<?php elseif ($dp['status_pengaduan'] == 'pengerjaan'): ?>
											<button type="button" class="btn btn-sm text-center btn-warning"><i class="fas fa-fw fa-hammer"></i> <?= $status; ?></button>
										<?php elseif ($dp['status_pengaduan'] == 'selesai'): ?>
											<button type="button" class="btn btn-sm text-center btn-primary"><i class="fas fa-fw fa-check-double"></i> <?= $status; ?></button>
										<?php elseif ($dp['status_pengaduan'] == 'tidak_valid'): ?>
											<button type="button" class="btn btn-sm text-center btn-secondary"><i class="fas fa-fw fa-times"></i> <?= $status; ?></button>
										<?php else: ?>
											<button type="button" class="btn btn-sm text-center btn-secondary"><i class="fas fa-fw fa-times"></i> <?= $status; ?></button>
										<?php endif ?>
									</td>
									<td class="align-middle">
										<?php if ($getTanggapan): ?>
											<?php if ($getTanggapan['status_tanggapan'] == 'proses'): ?>
												<p><?= $getTanggapan['isi_tanggapan']; ?></p>
											<?php elseif ($getTanggapan['status_tanggapan'] == 'valid'): ?>
												<p><?= $getTanggapan['isi_tanggapan']; ?></p>
											<?php elseif ($getTanggapan['status_tanggapan'] == 'pengerjaan'): ?>
												<p><?= $getTanggapan['isi_tanggapan']; ?></p>
											<?php elseif ($getTanggapan['status_tanggapan'] == 'selesai'): ?>
												<p><?= $getTanggapan['isi_tanggapan']; ?></p>
											<?php elseif ($getTanggapan['status_tanggapan'] == 'tidak_valid'): ?>
												<p><?= $getTanggapan['isi_tanggapan']; ?></p>
											<?php endif ?>
										<?php else: ?>
											<p>-</p>
										<?php endif ?>
									</td>
									<td class="align-middle text-center">
										<a href="<?= base_url('landing/detailPengaduan/' . $dp['id_pengaduan']); ?>" class="btn btn-sm btn-info m-1"><i class="fas fa-fw fa-align-justify"></i> Detail</a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
