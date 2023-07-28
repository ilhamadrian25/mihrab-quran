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
                                            <li class="breadcrumb-item active">Donasi</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Data donasi</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Data donasi (<?= count($data) ?>)</h4>
                                        <br>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="buttons-table-preview">
                                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Donasi</th>
                                                            <th>No Telepon</th>
                                                            <th>Pesan</th>
                                                            <th>Status</th>
                                                            <th>Tanggal</th>
                                                        </tr>
                                                    </thead>
                                                
                                                
                                                    <tbody>
                                                        <?php $no = 1; foreach($data as $d) : ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $d['full_name'] ?></td>
                                                            <?php 
                                                                $formattedAmount = number_format($d['donation_amount'], 0, ',', '.');
                                                                $idrAmount = "Rp ".$formattedAmount;
                                                            ?>
                                                            <td><?= $idrAmount ?></td>
                                                            <td><?= $d['phone_number'] ?></td>
                                                            <td><?= $d['support_message'] ?></td>
                                                            <td>
                                                                <?php if($d['status_transaction'] === "success") : ?>
                                                                    <span class="badge bg-success"><?= $d['status_transaction'] ?></span>
                                                                <?php elseif ($d['status_transaction'] === "pending") : ?>
                                                                    <span class="badge bg-warning"><i class="mdi mdi-cash"></i> <?= $d['status_transaction'] ?></span>
                                                                <?php elseif ($d['status_transaction'] === "expire") : ?>
                                                                    <span class="badge bg-danger"><i class="mdi mdi-cancel"></i> <?= $d['status_transaction'] ?></span>
                                                                <?php endif ?>
                                                            </td>
                                                            <td><?= date('Y-m-d', strtotime($d['created_at'])); ?></td>
                                                        </tr>
                                                        <?php endforeach ?>
                                                    </tbody>
                                                </table>                                           
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
                    </div> <!-- container -->
<?= $this->endSection('content'); ?>