<?= $this->extend('admin/layouts/wrapper'); ?>

<?= $this->section('content'); ?>
<!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-5 col-lg-6">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-account-multiple widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Donasi</h5>
                                                <h3 class="mt-3 mb-3"><?= $total_donatur ?></h3>
                                                <!-- <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                                    <span class="text-nowrap">Since last month</span>  
                                                </p> -->
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-cart-plus widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Transaksi sukses</h5>
                                                <h3 class="mt-3 mb-3"><?= count($trans_success) ?></h3>
                                                <!-- <p class="mb-0 text-muted">
                                                    <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 1.08%</span>
                                                    <span class="text-nowrap">Since last month</span>
                                                </p> -->
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-currency-usd widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Total donasi</h5>
                                                <h3 class="mt-3 mb-3"><?= $total_donation ?></h3>
                                                <!-- <p class="mb-0 text-muted">
                                                    <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                                                    <span class="text-nowrap">Since last month</span>
                                                </p> -->
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-pulse widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Growth">Campaign</h5>
                                                <h3 class="mt-3 mb-3"><?= $total ?></h3>
                                                <!-- <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                                    <span class="text-nowrap">Since last month</span>
                                                </p> -->
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                            </div> <!-- end col -->

                            <?php 
                                 function formatAngka($number) {
                                    $suffix = '';
                                    
                                    if ($number >= 1000000000) {
                                        $number = round($number / 1000000000, 0);
                                        $suffix = ' Milyar';
                                    } elseif ($number >= 1000000) {
                                        $number = round($number / 1000000, 0);
                                        $suffix = ' Juta';
                                    } elseif ($number >= 1000) {
                                        $number = round($number / 1000, 0);
                                        $suffix = ' Ribu';
                                    }
                                    
                                    return $number . $suffix;
                                }
                            ?>

                            <div class="col-xl-7 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-2 mb-3">Campaign teratas</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover mb-0">
                                                <tbody>
                                                    <?php foreach($top_campaign as $t): ?>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal"><?= $t['title'] ?></h5>
                                                            <span class="text-muted font-13"><?= $t['start_date'] ?></span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal"><?= formatAngka($t['target_donation']) ?></h5>
                                                            <span class="text-muted font-13">Target</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal"><?= formatAngka($t['total_donation']) ?></h5>
                                                            <span class="text-muted font-13">Tercapai</span>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach ?>

                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container -->

<?= $this->endSection(); ?>