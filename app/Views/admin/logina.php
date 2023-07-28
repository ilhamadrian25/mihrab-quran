
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $title ?></title>

	<!-- Global stylesheets -->
	<link href="<?= base_url('admin') ?>/assets/fonts/inter/inter.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('admin') ?>/assets/icons/phosphor/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/ltr/all.min.css" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?= base_url('admin') ?>/assets/demo/demo_configurator.js"></script>
	<script src="<?= base_url('admin') ?>/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content d-flex justify-content-center align-items-center">

					<!-- Login form -->
					<form class="login-form" action="<?= base_url('store') ?>" method="POST">
						<div class="card mb-0">
							<div class="card-body">
								<div class="text-center mb-3">
									<div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
										<img src="<?= base_url('image/logo.png') ?>" width="50px" class="h-48px" alt="">
									</div>
									<h5 class="mb-0">Login</h5>
                                    <?php if(session()->getFlashdata('error')) : ?>
                                        <div class="alert alert-danger border-0 alert-dismissible fade show">
										    <span class="fw-semibold"><?= session()->getFlashdata('error') ?></a>.
										    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
								        </div>
                                    <?php endif; ?>
								</div>

								<div class="mb-3">
									<label class="form-label">Email</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="text" class="form-control" name="email" id="email" placeholder="Masukan alamat Email">
										<div class="form-control-feedback-icon">
											<i class="ph-user-circle text-muted"></i>
										</div>
									</div>
								</div>

								<div class="mb-3">
									<label class="form-label">Password</label>
									<div class="form-control-feedback form-control-feedback-start">
										<input type="password" class="form-control" name="password" id="password" placeholder="•••••••••••">
										<div class="form-control-feedback-icon">
											<i class="ph-lock text-muted"></i>
										</div>
									</div>
								</div>

								<div class="mb-3">
									<button type="submit" class="btn btn-primary w-100">Login</button>
								</div>

							</div>
						</div>
					</form>
					<!-- /login form -->

				</div>
				<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-sm navbar-footer border-top">
					<div class="container-fluid">
						<span>&copy; <?= date('Y') ?> <a href="www.inovindo.co.id">INOVINDO</a></span>
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


</body>
</html>
