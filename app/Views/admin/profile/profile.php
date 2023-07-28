<?= $this->extend('admin/layouts/wrapper'); ?>
<?= $this->section('content'); ?>
<!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Profile</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-4 col-lg-5">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="<?= base_url('image/p/') . $user['profile_image'] ?>" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                                        <h4 class="mb-0 mt-2"><?= $user['name'] ?></h4>
                                        <p class="text-muted font-14">Admin</p>

                                        <div class="text-start mt-3">
                                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2 "><?= $user['email'] ?></span></p>
                                        </div>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->

                            </div> <!-- end col-->

                            <div class="col-xl-8 col-lg-7">
                                <div class="card">
                                    <div class="card-body">
                                                <form>
                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="firstname" class="form-label">Nama Lengkap</label>
                                                                <input type="text" class="form-control" id="firstname" placeholder="Enter first name">
                                                            </div>
                                                        </div>
                                                    </div> <!-- end row -->
    
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Alamat Email</label>
                                                                <input type="email" class="form-control" id="email" placeholder="Email" readonly value="<?= $user['email'] ?>">
                                                            </div>
                                                        </div>
                                                    </div> <!-- end row -->
    
                                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building me-1"></i> Keamanan</h5>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="cwebsite" class="form-label">Password Sekarang</label>
                                                                <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url">
                                                            </div>
                                                        </div> <!-- end col -->
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="cwebsite" class="form-label">Password baru</label>
                                                                <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url">
                                                            </div>
                                                        </div> <!-- end col -->
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="cwebsite" class="form-label">Konfirmasi password baru</label>
                                                                <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url">
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
    
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                                    </div>
                                                </form>
                                            <!-- end settings content-->
    
                                        </div> <!-- end tab-content -->
                                    </div> <!-- end card body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div>
                    <!-- container -->
<?= $this->endSection(); ?>