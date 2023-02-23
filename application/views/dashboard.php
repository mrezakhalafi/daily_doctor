		<div class="main-panel full-height">
			<div class="container">
				<div class="page-inner">
					<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-3 pb-4">
						<div>
							<h2 class="pb-2 fw-bold">Dashboard</h2>
							<h5 class="op-7 mb-2">Dashboard Utama</h5>
						</div>
						<div class="ml-md-auto py-2 py-md-0">
							<a href="#" class="btn btn-info btn-border btn-round mr-2" data-toggle="modal" data-target="#exampleModal2">Info Antrian</a>
							<?php if($user['role']==2): ?>
							<a href="<?= base_url('pasien/daftarantrian') ?>" class="btn btn-primary btn-round">Ambil Nomor Antrian</a>
							<?php else: ?>
							<a href="<?= base_url('dokter/antriansaya') ?>" class="btn btn-primary btn-round">Lihat Antrian Saya</a>
							<?php endif; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-chart-pie text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Pasien Berobat</p>
												<h4 class="card-title">700+</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-coins text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Konsultasi</p>
												<h4 class="card-title">Rp.50.000</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-error text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Komplain</p>
												<h4 class="card-title">0</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-twitter text-primary"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Testimoni</p>
												<h4 class="card-title">2000+</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="card">
							<img src="<?= base_url('assets/img/66d491d01748615d6b5473bde59dbdecc669d7b1.jpg') ?>" style="width: 700px; height:500px">
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Rekomendasi Dokter</div>
									<div class="card-list">

										<?php foreach($view_dokter as $row2): ?>		
										<div class="item-list">
											<div class="avatar">
												<img src="<?= base_url(); ?>assets/img/dokter/<?php echo $row2['foto']; ?>" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username"><?= $row2['nama']?></div>
												<div class="status"><?= $row2['spesialis']?></div>
											</div>
											<?php if($user['role']==2): ?>
											<a href="<?= base_url('pasien/daftarantrian') ?>"><button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button></a>
										<?php endif; ?>
										</div>
									<?php endforeach; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Cara Berkonsultasi</div>
								</div>
								<div class="card-body">
									<ol class="activity-feed">
										<li class="feed-item feed-item-secondary">
											<time class="date" datetime="9-25">Tahap 1</time>
											<span class="text">User melakukan pendaftaran dan melakukan login.</span>
										</li>
										<li class="feed-item feed-item-success">
											<time class="date" datetime="9-24">Tahap 2</time>
											<span class="text">Memilih menu <a href="">Daftar Antrian</a> untuk mengisi form pengajuan.</span>
										</li>
										<li class="feed-item feed-item-warning">
											<time class="date" datetime="9-21">Tahap 3</time>
											<span class="text">Dilanjutkan dengan mengisi data diri dan keluhan pasien.</span>
										</li>
										<li class="feed-item feed-item-danger">
											<time class="date" datetime="9-18">Tahap 4</time>
											<span class="text">Dokter akan menyetujui permintaan yang masuk.</span>
										</li>
										<li class="feed-item">
											<time class="date" datetime="9-17">Tahap 5</time>
											<span class="text">Pasien akan mendapatkan nomor antrian dan terdaftar pada tabel antrian.</span>
										</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Produk Kesehatan</div>
								</div>
								<div class="card-body pb-0">
									<div class="d-flex">
										<div class="avatar">
											<img src="<?= base_url('assets/img/logoproduct.svg') ?>" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">Dental Diagnostic Set</h6>
											<small class="text-muted">Alat Standar Kedokteran Gigi Advance</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold">Rp.504.000</h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar">
											<img src="<?= base_url('assets/img/logoproduct3.svg') ?>" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">Alat Peraga Tubuh Manusia</h6>
											<small class="text-muted">Berbahan Dari Fiber Berkualitas</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold">Rp.849.000</h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar">
											<img src="<?= base_url('assets/img/logoproduct3.svg') ?>" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">Telescope Littman Classic III</h6>
											<small class="text-muted">Stetoskop Littmann Classic III Black Edition</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold">Rp.752.000</h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar">
											<img src="<?= base_url('assets/img/logoproduct3.svg') ?>" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">Baju Dokter Mainan/ Latihan</h6>
											<small class="text-muted">Didesain Untuk Imajinasi Anak-Anak</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold">Rp.180.000</h3>
										</div>
									</div>
									<div class="separator-dashed"></div>
									<div class="d-flex">
										<div class="avatar">
											<img src="<?= base_url('assets/img/logoproduct.svg') ?>" alt="..." class="avatar-img rounded-circle">
										</div>
										<div class="flex-1 pt-1 ml-2">
											<h6 class="fw-bold mb-1">UV Sterilizer</h6>
											<small class="text-muted">Menetralkan Cahaya Yang Masuk Ke Mata</small>
										</div>
										<div class="d-flex ml-auto align-items-center">
											<h3 class="text-info fw-bold">Rp.645.000</h3>
										</div>
									</div>
									<br/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Info Antrian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Sistem antrian berbentuk user yang mengajukan permintaan konsultasi terlebih dahulu terhadap dokter, dan ketika dokter sudah menyetujui maka pasien akan masuk ke dalam antrian, dan ketika nomor pasien dipanggil pasien sudah harus siap di tempat, maka setelah selesai konsultasi dokter akan mengakhiri nomor antrian dan memasukan hasil antrian ke tabel transaksi yang dapat dilihat oleh dokter maupun pasien kedepannya.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Saya Mengerti</button>
      </div>
    </div>
  </div>
</div>

<script>
window.localStorage.setItem('dokter', "");
</script>