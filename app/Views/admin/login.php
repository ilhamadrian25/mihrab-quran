
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | Mihrab Quran</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        
        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Login</h4>
                                </div>
                                <?php if(session()->getFlashdata('error')) : ?>
                                    <div class="alert alert-danger border-0 alert-dismissible fade show">
                                        <span class="fw-semibold"><?= session()->getFlashdata('error') ?></a>.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    </div>
                                <?php endif; ?>

                                <form action="<?= base_url('store') ?>" method="POST">

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Alamat Email</label>
                                        <input class="form-control" type="email" name="email" id="email" required="" placeholder="Masukan alamat email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password"  name="password" id="password" class="form-control" placeholder="password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Log In </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
             <?= date('Y') ?> - Mihrab Quran © <a href="<?= base_url('www.inovindo.com') ?>">Inovindo</a>
        </footer>

        <!-- bundle -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/app.min.js"></script>
        
    </body>
</html>
