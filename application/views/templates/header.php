<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Administrator</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url('assets/img/icon.ico') ?>" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?= base_url('assets/js/plugin/webfont/webfont.min.js') ?>"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?= base_url('assets/css/fonts.min.css') ?>']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/atlantis.css') ?>">

	<!-- DATATABLES -->
	<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"> -->



</head>
<body data-background-color="bg2">
	<div class="wrapper fullheight-side no-box-shadow-style">
		<!-- Logo Header -->
		<div class="logo-header position-fixed" data-background-color="dark">

			<a href="<?= base_url('dashboard') ?>" style="color:white" class="logo">
				<i class="fas fa-user-md"></i>&nbsp; <b>Daily Doctor</b>
			</a>
			<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">
					<i class="icon-menu"></i>
				</span>
			</button>
			<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
			<div class="nav-toggle">
				<button class="btn btn-toggle toggle-sidebar">
					<i class="icon-menu"></i>
				</button>
			</div>
		</div>
		<!-- End Logo Header -->	
		<!-- Sidebar -->
		<div class="sidebar" data-background-color="dark">	
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<?php if($user['role']==1): ?>
							<img src="<?= base_url('assets/img/dokter/')?><?= $user['foto'] ?>" alt="..." class="avatar-img rounded-circle">
							<?php else: ?>
							<?php if($user['jk']=="Laki-Laki"): ?>
							<img src="<?= base_url('assets/img/man.png')?>" alt="..." class="avatar-img rounded-circle">
							<?php else: ?>
							<img src="<?= base_url('assets/img/girl.png')?>" alt="..." class="avatar-img rounded-circle">
						<?php endif; ?>
						<?php endif; ?>
						</div>
						<div class="info">
							<a data-toggle="collapse" aria-expanded="true">
								<span>
									<?= $user['nama']; ?>
									<?php if($user['role']==1): ?>
									<span class="user-level">Dokter</span>
									<?php elseif($user['role']==2): ?>
										<span class="user-level">Pasien</span>
									<?php else: ?>
										<span class="user-level">Administrator</span>										
										<?php endif; ?>			
									<!-- <span class="caret"></span> -->
								</span>
							</a>
							<div class="clearfix"></div>

							<!-- <div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">Profil Saya</span>
										</a>
									</li>
								</ul>
							</div> -->
						</div>
					</div>
					<ul class="nav nav-warning">
						<?php if($user['role']!=0): ?>
						<li class="nav-item active">
							<a href="<?= base_url('dashboard') ?>">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						<?php endif; ?>
						</li>
						<?php if($user['role']==1): ?>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu Dokter</h4>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('dokter/antriansaya') ?>">
								<i class="fas fa-file-contract"></i>
								<p>Antrian Saya</p>
								<span class="badge badge-count"><?= $jum_antrian ?></span>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a href="<?= base_url('dokter/statistikpasien') ?>">
								<i class="fas fa-chart-bar"></i>
								<p>Statistik Pasien</p>
							</a>
						</li> -->
						<li class="nav-item">
							<a href="<?= base_url('dokter/historykonsultasi') ?>">
								<i class="fas fa-print"></i>
								<p>History Konsultasi</p>
							</a>
						</li>
						<?php elseif($user['role']==2): ?>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu Pasien</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#email-nav">
								<i class="fas fa-file-signature"></i>
								<p>Antrian Dokter</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="email-nav">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url('pasien/daftarantrian') ?>">
											<span class="sub-item">Daftar Antrian</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url('pasien/antriansaya') ?>">
											<span class="sub-item">Antrian Saya</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url('pasien/lihatantrian') ?>">
											<span class="sub-item">Lihat Antrian</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('pasien/lihatdokter') ?>">
								<i class="icon-briefcase"></i>
								<p>Lihat Dokter</p>
								<span class="badge badge-count"><?= $jum_dokter ?></span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('pasien/historykonsultasi') ?>">
								<i class="fas fa-print"></i>
								<p>History Konsultasi</p>
							</a>
						</li>
						<li class="nav-item	">
							<a href="<?= base_url('pasien/kritiksaran') ?>">
								<i class="far fa-paper-plane"></i>
								<p>Kritik & Saran</p>
							</a>
						</li>
					</ul>
					<?php elseif($user['role']==0): ?>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu Administrator</h4>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin') ?>">
								<i class="icon-briefcase"></i>
								<p>Lihat Dokter</p>
								<span class="badge badge-count"><?= $jum_dokter ?></span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('tambahDokter') ?>">
								<i class="fas fa-print"></i>
								<p>Tambah Dokter</p>
							</a>
						</li>
					</ul>
								<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<!-- Navbar Header -->
		<nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">

			<div class="container-fluid">
				<nav class="navbar navbar-line navbar-header-left navbar-expand-lg p-0  d-none d-lg-flex">
					<ul class="navbar-nav page-navigation page-navigation-info">
						<li class="nav-item active">
							<a class="nav-link" href="<?= base_url('dashboard') ?>">
								Dashboard
							</a>
						</li>
					</ul>
				</nav>
				<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
					<li class="nav-item dropdown hidden-caret">
						<a href="http://www.facebook.com"><i class="fab fa-facebook-square" style="font-size:30px"></i></a>	
					</li>
					<li class="nav-item dropdown hidden-caret">
						<a href="http://www.twitter.com"><i class="fab fa-twitter-square" style="font-size:30px"></i></a>
					</li>
					<li class="nav-item dropdown hidden-caret">

					</li>
					<!-- <li class="nav-item dropdown hidden-caret">
						<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-bell"></i>
							<span class="notification">1</span>
						</a>
						<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
							<li>
								<div class="dropdown-title">Antrian Terkini</div>
							</li>
							<li>
								<div class="notif-scroll scrollbar-outer">
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													Henry Dwi Septian
												</span>
												<span class="time">1 menit yang lalu</span> 
											</div>
										</a>
									</div>
								</div>
							</li>
						</ul>
					</li> -->
					<li class="nav-item dropdown hidden-caret">
						<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
							<div class="avatar-sm">
								<?php if($user['role']==1): ?>
							<img src="<?= base_url('assets/img/dokter/')?><?= $user['foto'] ?>" alt="..." class="avatar-img rounded-circle">
									<?php else: ?>
								<?php if($user['jk']=="Laki-Laki"): ?>
								<img src="<?= base_url('assets/img/man.png') ?>" alt="..." class="avatar-img rounded-circle">
								<?php else: ?>
							<img src="<?= base_url('assets/img/girl.png')?>" alt="..." class="avatar-img rounded-circle">
						<?php endif; ?>
						<?php endif; ?>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-user animated fadeIn">
							<div class="dropdown-user-scroll scrollbar-outer">
								<li>
									<div class="user-box">
									<?php if($user['role']==1): ?>
										<div class="avatar-lg"><img src="<?= base_url('assets/img/dokter/') ?><?= $user['foto'] ?>" alt="image profile" class="avatar-img rounded"></div>
										<?php else: ?>
										<?php if($user['jk']=="Laki-Laki") : ?>
										<div class="avatar-lg"><img src="<?= base_url('assets/img/man.png') ?>" alt="image profile" class="avatar-img rounded"></div>
										<?php else: ?>
										<div class="avatar-lg"><img src="<?= base_url('assets/img/girl.png') ?>" alt="image profile" class="avatar-img rounded"></div>
									<?php endif; ?>
								<?php endif; ?>


										<div class="u-text">
											<h4><?= $user['nama']; ?></h4>
											<p class="text-muted"><?= $user['email']; ?></p><!-- <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">Lihat Profil</a> -->
										</div>
									</div>
								</li>
								<li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" href="">Logout</a>
								</li>
							</div>
						</ul>
					</li>
				</ul>
			</div>
		</nav>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin akan logout?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       	Semua data antrian anda akan tetap tersimpan.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a href="<?= base_url('dashboard/logout') ?>"><button type="button" class="btn btn-primary">Logout</button></a>
      </div>
    </div>
  </div>
</div>
		<!-- End Navbar -->