<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<title>Registrasi</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/my-login.css') ?>">
	<link rel="icon" href="<?= base_url('assets/img/icon.ico') ?>" type="image/x-icon"/>
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="<?= base_url('assets/img/logo.png') ?>">
					</div>
					<h2>Daily Doctor</h2>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Halaman Register</h4>
							<form action="<?= base_url('register/daftar') ?>" method="POST">
							 
								<div class="form-group">
									<label for="nama">Nama</label>
									<input id="nama" type="text" class="form-control" name="nama" required autofocus>
								</div>

								<div class="form-group">
									<label>Jenis Kelamin</label>
										<div class="row">
											<div class="col-md-6">
												<input type="radio" id="jkl" name="jk" value="Laki-Laki" required>&nbsp;Laki-Laki
											</div>
										<div class="col-md-6">
												<input type="radio" id="jkp" name="jk" value="Perempuan" required>&nbsp;Perempuan
										</div>						
									</div>
								</div>

								<div class="form-group">
									<label >Tanggal Lahir</label>
								 	<input type="date" name="tgl_lahir" class="form-control" value="1990-01-01">
								</div>

								<div class="form-group">
									<label for="username">Username</label>
									<input id="username" type="text" class="form-control" name="username" required autofocus>
								</div>

								<div class="form-group">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" required>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								<div class="form-group">
									<label for="password2">Konfirmasi Password</label>
									<input id="password2" type="password" class="form-control" name="password2" required data-eye>
								</div>


								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input id="alamat" type="alamat" class="form-control" name="alamat" required data-eye>
								</div>

								<div class="form-group">
									<label>
										<input type="checkbox" name="aggree" value="1"> Saya setuju dengan ketentuan yang ada
									</label>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="margin-top20 text-center">
									Sudah punya akun? <a href="<?= base_url('login') ?>">Login disini</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">

					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/my-login.js') ?>"></script>
	<script>
		$('.my-login-page').css({top: 0, opacity: 0})
		.animate({top: -0, opacity: 1}, 'slow');
	</script>
</body>
</html>