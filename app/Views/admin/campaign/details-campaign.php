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
                                            <li class="breadcrumb-item"><a href="<?= base_url('admin/campaign') ?>">Campaign</a></li>
                                            <li class="breadcrumb-item active"><?= $data['title'] ?></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Details Campaign</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xxl-12 col-lg-12">
                                <!-- project card -->
                                <div class="card d-block">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="dripicons-dots-3"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="<?= base_url('admin/campaign/edit/') . $data['slug'] ?>" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                                <!-- item-->
                                                <a href="" class="dropdown-item  btn-sm delete-btn" data-id="<?= $data['id_program'] ?>"><i class="mdi mdi-delete me-1"></i>Hapus</a>
                                                <!-- item-->
                                                <a href="<?= base_url('admin/campaign') ?>" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Kembali</a>
                                            </div>
                                        </div>
                                        <!-- project title-->
                                        <h3 class="mt-0">
                                            <?= $data['title'] ?>
                                        </h3>
                                        <?php if($data['status_donation'] === "ongoing") : ?>
                                        <div class="badge bg-secondary text-light p-1">Berlangsung</div>
                                        <?php else : ?>
                                        <div class="badge bg-success p-1">Selesai</div>
                                        <?php endif ?>
                                        <br>
                                        <br>
                                        <div class="text-center">
                                            <img src="<?= base_url('uploads/') . $data['image'] ?>" class="img-fluid" alt="" srcset="">
                                        </div>

                                        <h5>Deskripsi:</h5>

                                        <?= $data['description'] ?>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <h5>Tanggal dimulai</h5>
                                                    <p><?= $data['start_date'] ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <h5>Tanggal selesai</h5>
                                                    <p><?= $data['end_date'] ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <h5>Target donasi</h5>
                                                    <?php
                                                    
                                                    $hasil_target = 'Rp ' . number_format($data['target_donation'], 0, ',', '.') . ',00'; 
                                                    ?>
                                                    <p><?= $hasil_target ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <h5>Total terkumpul</h5>
                                                    <?php 
                                                    $hasil_total = 'Rp ' . number_format($data['total_donation'], 0, ',', '.') . ',00';
                                                    ?>
                                                    <p><?= $hasil_total ?></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- end card-body-->
                                    
                                </div> <!-- end card-->

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">

                                                <h4 class="header-title">Donatur (<?= count($donatur) ?>)</h4>

                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="buttons-table-preview">
                                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama</th>
                                                                    <th>Donasi</th>
                                                                    <th>No telepon</th>
                                                                    <th>Pesan</th>
                                                                    <th>Status</th>
                                                                    <th>Tanggal</th>
                                                                </tr>
                                                            </thead>
                                                        
                                                        
                                                            <tbody>
                                                                <?php $id=1; foreach($donatur as $d) : ?>
                                                                <tr>
                                                                    <td><?= $id++ ?></td>
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
                                                                            <span class="badge bg-warning"><?= $d['status_transaction'] ?></span>
                                                                        <?php elseif ($d['status_transaction'] === "expire") : ?>
                                                                            <span class="badge bg-danger"><?= $d['status_transaction'] ?></span>
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
                                <!-- end card-->
                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                    // Delete User
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
                                // Send a POST request to the delete URL
                                var deleteUrl = '<?= base_url('admin/campaign/delete/') ?>' + id;
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
                                            window.location.href = "<?= base_url('admin/campaign') ?>"
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


<?= $this->endSection(); ?>