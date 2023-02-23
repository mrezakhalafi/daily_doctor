<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<title>Forgot</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/my-login.css') ?>">
	<link rel="icon" href="<?= base_url('assets/img/icon.ico') ?>" type="image/x-icon"/>
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="<?= base_url('assets/img/logo.png') ?>">
					</div>
					<h2>Daily Doctor</h2>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Lupa Password</h4>
							<form method="POST">
							 
								<div class="form-group">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="form-text text-muted">
										Kami akan mengirim email konfirmasi untuk permintaan reset password
									</div>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Reset Password
									</button>
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
</body>
</html>
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script>
	$('.my-login-page').css({top: 0, opacity: 0})
	.animate({top: -0, opacity: 1}, 'slow');
</script>