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
                        <li class="breadcrumb-item active">Santri</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Santri</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title">Data Santri</h4>
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Data</button>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="buttons-table-preview">
                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Tanggal lahir</th>
                                        <th>Umur</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1; foreach ($data as $d) : ?>
                                        <tr>
                                            <td><?= $id++ ?></td>
                                            <td><?= $d['name'] ?></td>
                                            <td><?= $d['address'] ?></td>
                                            <td><?= date("Y-m-d", strtotime($d['dob'])) ?></td>
                                            <?php
                                            $tanggalLahir = date("Y-m-d", strtotime($d['dob']));
                                            $tanggalSekarang = date("Y-m-d");
                                            $umur = date_diff(date_create($tanggalLahir), date_create($tanggalSekarang))->y;
                                            ?>
                                            <td><?= $umur ?></td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon edit-button" data-id="<?= $d['id'] ?>"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="<?= base_url('admin/santri/delete/') . $d['id'] ?>" data-id="<?= $d['id'] ?>" class="action-icon delete-btn">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
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

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Tambah data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Tanggal lahir</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
