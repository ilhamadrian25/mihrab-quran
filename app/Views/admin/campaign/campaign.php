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
                                            <li class="breadcrumb-item active">Campaign</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Campaign</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <a href="<?= base_url('admin/campaign/create-campaign') ?>" class="btn btn-primary mb-3"><i class="mdi mdi-plus"></i> Buat Campaign</a>
                            </div>
                        </div> 
                        <!-- end row-->

                        <div class="row">
                            <?php foreach($campaign as $c) : ?>
                            <div class="col-md-6 col-xxl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top img-fluid" src="<?= base_url('uploads/') . $c['image'] ?>" alt="program 1">
                                    <div class="card-img-overlay">
                                        <?php if($c['status_donation'] === "ongoing") : ?>
                                        <div class="badge bg-secondary text-light p-1">Berlangsung</div>
                                        <?php else : ?>
                                        <div class="badge bg-success p-1">Selesai</div>
                                        <?php endif ?>
                                    </div>

                                    <div class="card-body position-relative">
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="<?= base_url('admin/campaign/details/') . $c['slug'] ?>" class="text-title"><?= $c['title'] ?></a>
                                        </h4>

                                        <p class="mb-3">
                                            <?= (strlen($c['description']) > 100) ? substr($c['description'], 0, 100) . "..." : $c['description']; ?>
                                        </p>

                                        <!-- project progress-->
                                        <?php 
                                        $totalDonasiTarget = $c['target_donation'];
                                        $totalDonasiTerkumpul = $c['total_donation'];

                                        $persentase = ($totalDonasiTerkumpul / $totalDonasiTarget) * 100;
                                        if ($persentase > 100) {
                                            $persentase = 100;
                                        }
                                        ?>
                                            
                                        <p class="mb-2 fw-bold">Progress <span class="float-end"><?= $persentase ?>%</span></p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="<?= $persentase ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $persentase ?>%;">
                                            </div><!-- /.progress-bar -->
                                        </div><!-- /.progress -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                            <?php endforeach ?>
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

<?= $this->endSection(); ?>