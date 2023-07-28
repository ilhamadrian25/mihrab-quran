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
                                            <li class="breadcrumb-item active">Artikel</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Artikel</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Data Artikel</h4>
                                        <div class="mb-2">
                                            <a href="<?= base_url('admin/article/create-article') ?>" class="btn btn-primary">Buat Artikel</a>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="alt-pagination-preview">
                                                <table id="alternative-page-datatable" class="table dt-responsive nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th class="all" style="width: 20px;">
                                                        NO
                                                        </th>
                                                        <th class="all">Gambar</th>
                                                        <th>Judul</th>
                                                        <th>Konten</th>
                                                        <th>Tanggal dibuat</th>
                                                        <th>Status</th>
                                                        <th style="width: 85px;">Aksi</th>
                                                    </tr>
                                                    </thead>
                                                
                                                
                                                <tbody>
                                                    <?php $no = 1; foreach($data as $d) : ?>
                                                    <tr>
                                                        <td>
                                                            <?= $no++ ?>
                                                        </td>
                                                        <td>
                                                            <img src="<?= base_url('uploads/') . $d['image'] ?>" alt="contact-img" title="contact-img" class="rounded me-3" height="80">
                                                        </td>
                                                        <td>
                                                            <?= $d['title'] ?>
                                                        </td>
                                                        <td>
                                                            <?= substr($d['content'], 0, 100) . '...'; ?>
                                                        </td>
                                                        <td>
                                                            <?= date('d F Y', strtotime($d['created_at'])) ?>
                                                        </td>
                                                        <td>
                                                            <?php if($d['status'] === "publish") : ?>
                                                                <span class="badge bg-success"><?= $d['status'] ?></span>
                                                            <?php elseif ($d['status'] === "draft"): ?>
                                                                <span class="badge bg-warning"><?= $d['status'] ?></span>
                                                            <?php endif ?>
                                                        </td>
                    
                                                        <td class="table-action">
                                                            <a href="<?= base_url('a/') . $d['slug'] ?>" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                            <a href="<?= base_url('admin/article/edit/') . $d['slug'] ?>" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0)" data-id="<?= $d['id_article'] ?>" class="action-icon delete-btn"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
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
                var deleteUrl = '<?= base_url('admin/article/delete/') ?>' + id;
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
                            showConfirmButton: true, // Menampilkan tombol OK
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
<?= $this->endSection(); ?>