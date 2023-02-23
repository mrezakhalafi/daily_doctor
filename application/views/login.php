<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
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
							<h4 class="card-title">Halaman Login</h4>
							<form action="<?= base_url('login/masuk') ?>" method="POST">
							 
								<div class="form-group">
									<label for="email">Email</label>

									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="<?= base_url('forgot') ?>" class="float-right">
											Lupa Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								<div class="form-group">
									<div class="custom-control custom-checkbox">
    									<input type="checkbox" class="custom-control-input" id="customCheck">
   										 <label class="custom-control-label" for="customCheck">Saya setuju dengan ketentuan yang ada</label>
  									</div>
								</div>

								<div class="form-group no-margin">
								<button type="submit" class="btn btn-primary btn-block">
										Login
									</button></a>
								</div>
								<div class="margin-top20 text-center">
									Belum punya akun? <a href="<?= base_url('register') ?>">Registrasi disini</a>
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

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/my-login.js') ?>"></script>

	<script>
		$('.my-login-page').css({top: 0, opacity: 0})
		.animate({top: -0, opacity: 1}, 'slow');
	</script>
</body>
</html>