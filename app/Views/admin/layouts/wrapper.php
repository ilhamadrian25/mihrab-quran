
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title><?= $title ?> | Admin - <?= $settings['title'] ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url() ?>favicon.ico">

        <?php if(service('request')->uri->getSegment(2) === "dashboard") : ?>
        <!-- third party css -->
        <link href="<?= base_url('admin/') ?>assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <?php endif ?>
        
        <?php if(service('request')->uri->getSegment(2) === "campaign" && !service('request')->uri->getSegment(3)) : ?>
        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "article" && !service('request')->uri->getSegment(3)) : ?>
        <!-- third party css -->
        <link href="<?= base_url('admin/') ?>assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <?php endif ?>
        <?php if(service('request')->uri->getSegment(3) === "create-article") : ?>
        <!-- SimpleMDE css -->
        <link href="<?= base_url('admin/') ?>assets/css/vendor/simplemde.min.css" rel="stylesheet" type="text/css">

        <!-- Quill css -->
        <link href="<?= base_url('admin/') ?>assets/css/vendor/quill.bubble.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/quill.core.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/quill.snow.css" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <?php endif ?>
        <?php if(service('request')->uri->getSegment(3) === "create-campaign") : ?>
        <!-- Include stylesheet -->
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <?php endif ?>
        
        <?php if(service('request')->uri->getSegment(2) === "donate" && !service('request')->uri->getSegment(3)) : ?>
        <!-- third party css -->
        <link href="<?= base_url('admin/as') ?>sets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/as') ?>sets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/as') ?>sets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/as') ?>sets/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="<?= base_url('admin/as') ?>sets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/as') ?>sets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/as') ?>sets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "santri" && !service('request')->uri->getSegment(3)) : ?>
        <!-- third party css -->
        <link href="<?= base_url('admin/') ?>assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(3) === "create-santri") : ?>
        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "profile") : ?>
        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "pengurus" && !service('request')->uri->getSegment(3)) : ?>
        <!-- third party css -->
        <link href="<?= base_url('admin/') ?>assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "gallery" && !service('request')->uri->getSegment(3)) : ?>
        <!-- third party css -->
        <link href="<?= base_url('admin/') ?>assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(3) === "details") : ?>
        <!-- third party css -->
        <link href="<?= base_url('admin/') ?>assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

        <?php endif ?>

        <?php if(service('request')->uri->getSegment(3) === "edit") : ?>
        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "website" && !service('request')->uri->getSegment(3)) : ?>
        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "mqa-tv" && !service('request')->uri->getSegment(3)) : ?>
        <!-- third party css -->
        <link href="<?= base_url('admin/') ?>assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="<?= base_url('admin/') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('admin/') ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?= base_url('admin/') ?>assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style"
        <?php endif ?>

    </head>
    
    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <!-- <a href="<?= base_url('admin/dashboard') ?>" class="logo text-cener logo-light">
                    <span class="logo-lg">
                        <img src="<?= base_url('admin/') ?>assets/images/logo.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="<?= base_url('admin/') ?>assets/images/logo_sm.png" alt="" height="16">
                    </span>
                </a> -->

                <!-- LOGO -->
                <!-- <a href="<?= base_url('admin/dashboard') ?>" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="<?= base_url('admin/') ?>assets/images/logo-dark.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="<?= base_url('admin/') ?>assets/images/logo_sm_dark.png" alt="" height="16">
                    </span>
                </a> -->
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigasi</li>

                        <li class="side-nav-item">
                            <a href="<?= base_url('admin/dashboard') ?>" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>


                        <li class="side-nav-title side-nav-item">Master Data</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarCampaign" aria-expanded="false" aria-controls="sidebarCampaign" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Campaign </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCampaign">
                                <ul class="side-nav-second-level">
                                    <li><a href="<?= base_url('admin/campaign') ?>">Campaign</a></li>
                                    <li>
                                        <a href="<?= base_url('admin/campaign/create-campaign') ?>">Buat Campaign</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarArticle" aria-expanded="false" aria-controls="sidebarArticle" class="side-nav-link">
                                <i class="uil-notebooks"></i>
                                <span> Artikel </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarArticle">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="<?= base_url('admin/article') ?>">Artikel</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('admin/article/create-article') ?>">Buat Artikel</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="side-nav-item">
                            <a href="<?= base_url('admin/donate') ?>" class="side-nav-link">
                                <i class="uil-bill"></i>
                                <span> Donasi </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="<?= base_url('admin/santri') ?>" class="side-nav-link">
                                <i class="uil-clipboard-alt"></i>
                                <span> Data Santri </span>
                            </a>
                        </li>
                        
                        <li class="side-nav-item">
                            <a href="<?= base_url('admin/pengurus') ?>" class="side-nav-link">
                                <i class="uil-clipboard-alt"></i>
                                <span> Data Pengurus </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="<?= base_url('admin/gallery') ?>" class="side-nav-link">
                                <i class="uil-image"></i>
                                <span> Album </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="<?= base_url('admin/mqa-tv') ?>" class="side-nav-link">
                                <i class="uil-youtube"></i>
                                <span> Mqa Tv </span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item">Pengaturan</li>

                        <li class="side-nav-item">
                            <a href="<?= base_url('admin/website') ?>" class="side-nav-link">
                                <i class="uil-shield"></i>
                                <span> Website </span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

                        <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="<?= base_url('image/p/') . $user['profile_image'] ?>" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name"><?= $user['name'] ?></span>
                                        <span class="account-position">Admin</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <!-- <a href="<?= base_url('admin/profile') ?>" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>Profile</span>
                                    </a> -->

                                    <!-- item-->
                                    <a href="<?= base_url('logout') ?>" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <!-- end Topbar -->
            <?= $this->renderSection('content'); ?>
            </div>
            <!-- content -->

        </div>
        <!-- END wrapper -->

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <?php if(service('request')->uri->getSegment(2) === "dashboard") : ?>
        <!-- bundle -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor/apexcharts.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?= base_url('admin/') ?>assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "campaign" && !service('request')->uri->getSegment(3)) : ?>
        <!-- bundle -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/app.min.js"></script>
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "article" && !service('request')->uri->getSegment(3)) : ?>
        <!-- bundle -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.bootstrap5.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.responsive.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/responsive.bootstrap5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.bootstrap5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.html5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.flash.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.print.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.select.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?= base_url('admin/') ?>assets/js/pages/demo.datatable-init.js"></script>
        <!-- end demo js-->
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(3) === "create-article") : ?>
        <!-- bundle -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/app.min.js"></script>
        <!-- quill js -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor/quill.min.js"></script>
        <!-- Init js-->
        <script src="<?= base_url('admin/') ?>assets/js/pages/demo.quilljs.js"></script>

        <!-- SimpleMDE js -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor/simplemde.min.js"></script>

        <!-- SimpleMDE demo -->
        <script src="<?= base_url('admin/') ?>assets/js/pages/demo.simplemde.js"></script>

        <!-- Dropzone js -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dropzone.min.js"></script>

        <!-- File upload js -->
        <script src="<?= base_url('admin/') ?>assets/js/ui/component.fileupload.js"></script>
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(3) === "create-campaign") : ?>
            
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Include the Quill library -->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <!-- Initialize Quill editor -->
        <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
        </script>
        

        <script>
        $(document).ready(function() {
            $('#uploadForm').submit(function(e) {
            e.preventDefault();

            var form = $(this);
            var formData = new FormData(form[0]);
            var content = quill.root.innerHTML; // Mendapatkan konten HTML dari Quill Editor

            formData.append('description', content);
            $.ajax({
                type: 'POST',
                url: '<?= base_url('admin/campaign') ?>',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    text: response.message
                    }).then(function() {
                    form[0].reset();
                    clearPreview();
                    window.location.href = "<?= base_url('admin/campaign') ?>"
                    });
                } else {
                    Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: response.message
                    });
                }
                },
                error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Terjadi kesalahan dalam mengunggah file.'
                });
                }
            });
            });
            

            $('#imageInput').change(function() {
            var fileInput = $(this)[0];
            var previewContainer = $('#preview-container');
            var previewImage = $('#preview');

            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                previewImage.attr('src', e.target.result);
                previewContainer.show();
                }

                reader.readAsDataURL(fileInput.files[0]);
            } else {
                clearPreview();
            }
            });

            function clearPreview() {
            var fileInput = $('#imageInput');
            var previewContainer = $('#preview-container');
            var previewImage = $('#preview');

            fileInput.val('');
            previewContainer.hide();
            previewImage.attr('src', '');
            }

            function validateInput() {
            var input = $('#inputField').val();
            var errorText = $('#errorText');

            if (input.trim() === '') {
                errorText.text('Field ini wajib diisi!');
                errorText.show();
                return false;
            } else {
                errorText.hide();
                return true;
            }
            }
        });
        
            function formatCurrency(input) {
                var number = parseInt(input);
                var formattedCurrency = number.toLocaleString('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                });

                return formattedCurrency;
            }

            function updateCurrency() {
                var inputElement = document.getElementById("target_donation");
                var outputElement = document.getElementById("outputDonation");

                var input = inputElement.value;
                var formattedValue = formatCurrency(input);

                outputElement.textContent = formattedValue;
            }

            function slugify() {
            var title = document.getElementById('title').value;
            var slug = title.replace(/\s+/g, '-');

            slug = slug.toLowerCase();
            slug = slug.replace(/[^a-z0-9-]/g, '');
            slug = slug.replace(/-+/g, '-');
            slug = slug.replace(/^-|-$/g, '');

            document.getElementById('slug').textContent = slug;
        }
        </script>
        <!-- bundle -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/app.min.js"></script>

        <!-- plugin js -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dropzone.min.js"></script>
        <!-- init js -->
        <script src="<?= base_url('admin/') ?>assets/js/ui/component.fileupload.js"></script>
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "donate" && !service('request')->uri->getSegment(3)) : ?>
        <!-- bundle -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.bootstrap5.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.responsive.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/responsive.bootstrap5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.bootstrap5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.html5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.flash.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.print.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.select.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?= base_url('admin/') ?>assets/js/pages/demo.datatable-init.js"></script>
        <!-- end demo js-->
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "santri" && !service('request')->uri->getSegment(3)) : ?>
        <!-- bundle -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.bootstrap5.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.responsive.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/responsive.bootstrap5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.bootstrap5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.html5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.flash.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.print.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.select.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?= base_url('admin/') ?>assets/js/pages/demo.datatable-init.js"></script>
        <!-- end demo js-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).on('submit', '#addForm', function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: '<?= base_url('admin/santri') ?>',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status === "success") {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message,
                                showConfirmButton: true,
                            }).then(() => {
                                    location.reload();
                                });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message,
                            });
                        }
                    }
                });
            });
            $(document).on('click', '.delete-btn', function(e) {
                e.preventDefault();

                var id = $(this).data('id');

                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ya, hapus ini!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var deleteUrl = '<?= base_url('admin/santri/delete/') ?>' + id;
                        var formData = new FormData();
                        formData.append('_method', 'POST');

                        fetch(deleteUrl, {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Sukses',
                                    text: data.message,
                                    showConfirmButton: true,
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    location.reload();
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: data.message,
                                });
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Terjadi kesalahan saat menghapus data.',
                            });
                        });
                    }
                });
            });
        </script>
        
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "profile") : ?>
        <!-- bundle -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/app.min.js"></script>
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "pengurus" && !service('request')->uri->getSegment(3)) : ?>
        <!-- bundle -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.bootstrap5.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.responsive.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/responsive.bootstrap5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.bootstrap5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.html5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.flash.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.print.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.select.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?= base_url('admin/') ?>assets/js/pages/demo.datatable-init.js"></script>
        <!-- end demo js-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
                $('#formFile').on('change', function() {
                    readURL(this);
                    
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $('.preview').html('<img src="' + e.target.result + '" class="img-thumbnail img-fluid" width="200" height="200" />');
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                });
        </script>
        <script>
            $(document).ready(function() {
                $('#formPengurus').submit(function(e) {
                    e.preventDefault(); 

                    var formData = new FormData(this);

                    $.ajax({
                        url: '<?= site_url('admin/pengurus') ?>',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            if (response.status === 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Sukses',
                                    text: response.message,
                                }).then(function() {
                                    window.location.reload();
                                });
                            } else if (response.status === 'error') {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Terjadi kesalahan: ' + response.message,
                                });
                            }
                        },
                        error: function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Terjadi kesalahan saat mengirim data.',
                            });
                        }
                    });
                });
            });
            $(document).on('click', '.delete-btn', function(e) {
                e.preventDefault();

                var id = $(this).data('id');

                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ya, hapus ini!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var deleteUrl = '<?= base_url('admin/pengurus/delete/') ?>' + id;
                        var formData = new FormData();
                        formData.append('_method', 'POST');

                        fetch(deleteUrl, {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Sukses',
                                    text: data.message,
                                    showConfirmButton: true, 
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    location.reload();
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: data.message,
                                });
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Terjadi kesalahan saat menghapus data.',
                            });
                        });
                    }
                });
            });
        </script>
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "gallery" && !service('request')->uri->getSegment(3)) : ?>
        <!-- bundle -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.bootstrap5.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.responsive.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/responsive.bootstrap5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.bootstrap5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.html5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.flash.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.print.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.select.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?= base_url('admin/') ?>assets/js/pages/demo.datatable-init.js"></script>
        <!-- end demo js-->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            $('#formFile').on('change', function() {
                readURL(this);
                    
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $('.preview').html('<img src="' + e.target.result + '" class="img-thumbnail img-fluid" width="200" height="200" />');
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                });
            $(document).ready(function() {
                // Image preview
                $("#albumImage").change(function() {
                    readURL(this);
                });

                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#previewImage').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                // Submit form using AJAX
                $('#addAlbumForm').submit(function(e) {
                    e.preventDefault();

                    var formData = new FormData(this);

                    $.ajax({
                        url: '<?= base_url('admin/gallery') ?>',
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.status == 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: 'Album successfully added!',
                                    showConfirmButton: true,
                                }).then(function() {
                                    location.reload();
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Failed to add album. Please try again.',
                                    showConfirmButton: true,
                                });
                            }
                        },
                        error: function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Failed to add album. Please try again.',
                                showConfirmButton: true,
                            });
                        }
                    });
                });
            });
                $(document).ready(function() {
                // Delete album
                    $('.delete-album').click(function(e) {
                        e.preventDefault();

                        var albumId = $(this).data('id');

                        Swal.fire({
                            title: 'Apakah anda yakin?',
                            text: "Anda tidak dapat mengembalikan ini!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya, hapus ini!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Send AJAX request to delete the album
                                $.ajax({
                                    url: '<?= base_url('admin/gallery/delete') ?>',
                                    type: 'POST',
                                    data: {
                                        albumId: albumId
                                    },
                                    dataType: 'json',
                                    success: function(response) {
                                        if (response.status == 'success') {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success',
                                                text: response.message,
                                                showConfirmButton: true,
                                            }).then(function() {
                                                location.reload();
                                            });
                                        } else {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Error',
                                                text: 'Gagal menghapus album. Silakan coba lagi.',
                                                showConfirmButton: true,
                                            });
                                        }
                                    },
                                    error: function() {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Error',
                                            text: 'Gagal menghapus album. Silakan coba lagi.',
                                            showConfirmButton: true,
                                        });
                                    }
                                });
                            }
                        });
                    });
                });
        </script>
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(3) === "details") : ?>
        <!-- bundle -->
        <script src="<?= base_url('admin') ?>/assets/js/vendor.min.js"></script>
        <script src="<?= base_url('admin') ?>/assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="<?= base_url('admin') ?>/assets/js/vendor/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('admin') ?>/assets/js/vendor/dataTables.bootstrap5.js"></script>
        <script src="<?= base_url('admin') ?>/assets/js/vendor/dataTables.responsive.min.js"></script>
        <script src="<?= base_url('admin') ?>/assets/js/vendor/responsive.bootstrap5.min.js"></script>
        <script src="<?= base_url('admin') ?>/assets/js/vendor/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('admin') ?>/assets/js/vendor/buttons.bootstrap5.min.js"></script>
        <script src="<?= base_url('admin') ?>/assets/js/vendor/buttons.html5.min.js"></script>
        <script src="<?= base_url('admin') ?>/assets/js/vendor/buttons.flash.min.js"></script>
        <script src="<?= base_url('admin') ?>/assets/js/vendor/buttons.print.min.js"></script>
        <script src="<?= base_url('admin') ?>/assets/js/vendor/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url('admin') ?>/assets/js/vendor/dataTables.select.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?= base_url('admin') ?>/assets/js/pages/demo.datatable-init.js"></script>
        <!-- end demo js-->
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(3) === "edit") : ?>
        <!-- bundle -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/app.min.js"></script>

        <!-- plugin js -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dropzone.min.js"></script>
        <!-- init js -->
        <script src="<?= base_url('admin/') ?>assets/js/ui/component.fileupload.js"></script>
        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "website" && !service('request')->uri->getSegment(3)): ?>
        <!-- bundle -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/app.min.js"></script>

        <!-- Typehead -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor/handlebars.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/typeahead.bundle.min.js"></script>

        <!-- Demo -->
        <script src="<?= base_url('admin/') ?>assets/js/pages/demo.typehead.js"></script>

        <!-- Timepicker -->
        <script src="<?= base_url('admin/') ?>assets/js/pages/demo.timepicker.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Memuat SweetAlert menggunakan CDN -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
        
        <!-- Memuat stylesheet SweetAlert -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

  <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });
    </script>
    <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var previewElement = document.getElementById("preview-background-banner1");
                previewElement.innerHTML = "<img src='" + e.target.result + "' class='img-thumbnail' width='200' height='200' />";
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    var backgroundInput = document.getElementById("background");
    backgroundInput.addEventListener("change", function() {
        readURL(this);
    });


    $(document).ready(function() {
    $('#update-social-media').submit(function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: '<?= base_url('admin/social-media'); ?>',
            type: 'POST',
            data: formData,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    );
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    $(document).ready(function() {
    $('#file').on('change', function() {
        var fileInput = $(this)[0].files[0];

        var imageUrl = URL.createObjectURL(fileInput);

        $('#preview-image-webiste').html('<img src="' + imageUrl + '" alt="Preview Image" width="200">');
    });
    $('#update-website').submit(function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: '<?= base_url('admin/website/update'); ?>',
            type: 'POST',
            data: formData,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    );
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    $(document).ready(function() {
    $('#file').on('change', function() {
        var fileInput = $(this)[0].files[0];

        var imageUrl = URL.createObjectURL(fileInput);

        $('#preview-image-webiste').html('<img src="' + imageUrl + '" alt="Preview Image" width="200">');
    });
    $('#update-favicon').submit(function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: '<?= base_url('admin/website/update-favicon'); ?>',
            type: 'POST',
            data: formData,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    );
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    $(document).ready(function() {
    $('#update-banner-home').submit(function(e) {
        e.preventDefault();

        var form = $(this);
        var formData = new FormData(form[0]);

        $.ajax({
            url: '<?= base_url('admin/banner-1'); ?>',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    ).then(()=> {
                        location.reload()
                    });
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    $(document).ready(function() {
    $('#update-banner-home2').submit(function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: '<?= base_url('admin/banner-2'); ?>',
            type: 'POST',
            data: formData,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    );
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    $(document).ready(function() {
    $('#file').on('change', function() {
    var fileInput = $(this)[0].files[0];

    var imageUrl = URL.createObjectURL(fileInput);

    $('#preview-image-webiste').html('<img src="' + imageUrl + '" alt="Preview Image" width="200">');
    });
    $('#update-banner-home3').submit(function(e) {
        e.preventDefault();

        var form = $(this);
        var formData = new FormData(form[0]);

        $.ajax({
            url: '<?= base_url('admin/banner-3'); ?>',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    ).then( () => {
                        location.reload()
                    });
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    $(document).ready(function() {
    $('#update-banner-home4').submit(function(e) {
        e.preventDefault();

        var form = $(this);
        var formData = new FormData(form[0]);

        $.ajax({
            url: '<?= base_url('admin/banner-4'); ?>',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    ).then(() => {
                        location.reload();
                    });
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    $(document).ready(function() {
    $('#update-profile').submit(function(e) {
        e.preventDefault();

        var form = $(this);
        var formData = new FormData(form[0]);
        var content = quill.root.innerHTML; // Mendapatkan konten HTML dari Quill Editor

        formData.append('description', content);

        $.ajax({
            url: '<?= base_url('admin/profile-page'); ?>',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    ).then(()=> {
                        location.reload();
                    });
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    $(document).ready(function() {
    $('#update-santri').submit(function(e) {
        e.preventDefault();

        var form = $(this);
        var formData = new FormData(form[0]);

        $.ajax({
            url: '<?= base_url('admin/santri-page'); ?>',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    ).then(()=> {
                        location.reload();
                    });
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    $(document).ready(function() {
    $('#update-campaign').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: '<?= base_url('admin/campaign-page'); ?>',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    ).then(()=> {
                        location.reload();
                    });
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    $(document).ready(function() {
    $('#update-mqa-tv').submit(function(e) {
        e.preventDefault();

        var form = $(this);
        var formData = new FormData(form[0]);

        $.ajax({
            url: '<?= base_url('admin/mqa-tv-page'); ?>',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    ).then(()=> {
                        location.reload();
                    });
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    $(document).ready(function() {
    $('#update-gallery').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: '<?= base_url('admin/gallery-page'); ?>',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    ).then(()=> {
                        location.reload();
                    });
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    $(document).ready(function() {
    $('#update-article').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: '<?= base_url('admin/article-page'); ?>',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    ).then(()=> {
                        location.reload();
                    });
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    $(document).ready(function() {
    $('#update-details-article').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: '<?= base_url('admin/details-article-page'); ?>',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    ).then(()=> {
                        location.reload();
                    });
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    $(document).ready(function() {
    $('#update-form').submit(function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
        url: '<?= base_url('admin/contact') ?>',
        type: 'POST',
        data: formData,
        beforeSend: function() {
            Swal.fire({
            title: 'Mohon tunggu',
            html: 'Sedang memperbarui data...',
            allowOutsideClick: false,
            onBeforeOpen: () => {
                Swal.showLoading();
            }
            });
        },
        success: function(response) {
            Swal.close();

            if (response.status === "success") {
            Swal.fire('Sukses', response.message, response.status).then(function() {
            }).then(() => {
                location.reload()
            });
            } else {
            Swal.fire('Error', response.message, response.status);
            }
        },
        error: function() {
            Swal.close();

            Swal.fire('Error', 'Terjadi kesalahan saat mengirim permintaan.', 'error');
        }
        });
    });
    });
  </script>
  <script>
        $('#formFileB3').on('change', function() {
            readURL(this);
            
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.previewB3').html('<img src="' + e.target.result + '" class="img-thumbnail img-fluid" width="200" height="200" />');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
        $('#formFileB4').on('change', function() {
            readURL(this);
            
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.previewB4').html('<img src="' + e.target.result + '" class="img-thumbnail img-fluid" width="200" height="200" />');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
        $('#formFileP').on('change', function() {
            readURL(this);
            
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.previewP').html('<img src="' + e.target.result + '" class="img-thumbnail img-fluid" width="200" height="200" />');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
        $('#formFileS').on('change', function() {
            readURL(this);
            
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.previewS').html('<img src="' + e.target.result + '" class="img-thumbnail img-fluid" width="200" height="200" />');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
        $('#formFileC').on('change', function() {
            readURL(this);
            
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.previewC').html('<img src="' + e.target.result + '" class="img-thumbnail img-fluid" width="200" height="200" />');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
        $('#formFileM').on('change', function() {
            readURL(this);
            
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.previewM').html('<img src="' + e.target.result + '" class="img-thumbnail img-fluid" width="200" height="200" />');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
        $('#formFileG').on('change', function() {
            readURL(this);
            
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.previewG').html('<img src="' + e.target.result + '" class="img-thumbnail img-fluid" width="200" height="200" />');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
        $('#formFileA').on('change', function() {
            readURL(this);
            
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.previewA').html('<img src="' + e.target.result + '" class="img-thumbnail img-fluid" width="200" height="200" />');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
        $('#formFileD').on('change', function() {
            readURL(this);
            
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.previewD').html('<img src="' + e.target.result + '" class="img-thumbnail img-fluid" width="200" height="200" />');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
  </script>

        <?php endif ?>

        <?php if(service('request')->uri->getSegment(2) === "mqa-tv" && !service('request')->uri->getSegment(3)) : ?>
        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="<?= base_url('admin/') ?>assets/js/vendor/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.bootstrap5.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.responsive.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/responsive.bootstrap5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.bootstrap5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.html5.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.flash.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/buttons.print.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url('admin/') ?>assets/js/vendor/dataTables.select.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?= base_url('admin/') ?>assets/js/pages/demo.datatable-init.js"></script>
        <!-- end demo js-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function() {
                $('.delete-data').click(function() {
                    var id = $(this).data('id');

                    Swal.fire({
                        title: 'Apakah anda yakin?',
                        text: "Anda tidak akan dapat mengembalikan ini!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus ini!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: '/admin/mqatv/delete/' + id,
                                type: 'DELETE',
                                dataType: 'json',
                                success: function(response) {
                                    if (response.status === 'success') {
                                        Swal.fire(
                                            'Terhapus!',
                                            response.message,
                                            'success'
                                        ).then((result) => {
                                            location.reload();
                                        });
                                    } else {
                                        Swal.fire(
                                            'Error!',
                                            response.message,
                                            'error'
                                        );
                                    }
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    Swal.fire(
                                        'Error!',
                                        'Failed to delete data. Please try again.',
                                        'error'
                                    );
                                }
                            });
                        }
                    });
                });
            });

            $(document).ready(function() {
                $("#submitVideo").click(function(e) {
                    e.preventDefault();
                    var url_video = $("#url_video").val();

                    $.ajax({
                        url: "<?= base_url('admin/mqa-tv') ?>",
                        type: "POST",
                        data: {
                            url_video: url_video
                        },
                        success: function(response) {
                            $("#addVideoModal").modal('hide');

                            $("#url_video").val('');

                            Swal.fire({
                                icon: 'success',
                                title: 'Video ditambahkan',
                                showConfirmButton: true,
                            }).then(() => {
                                location.reload()
                            });

                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal menambahkan video',
                                text: 'Terjadi kesalahan saat menambahkan video.',
                                showConfirmButton: true,
                            });
                        }
                    });
                });
            });
        </script>
        <?php endif ?>
    </body>
</html>