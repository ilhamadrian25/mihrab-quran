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
                        <li class="breadcrumb-item active">Pengurus</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Pengurus</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_data_pengurus">Tambah Data</button>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="alt-pagination-preview">
                            <table id="alternative-page-datatable" class="table dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th class="all" style="width: 20px;">NO</th>
                                    <th class="all">Profile</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Alamat</th>
                                    <th style="width: 85px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $id = 1; foreach($data as $d) : ?>
                                <tr>
                                    <td><?= $id++ ?></td>
                                    <td>
                                        <img src="<?= base_url('uploads/') .$d['profile_image'] ?>" alt="contact-img" title="contact-img" class="rounded me-3" height="80">
                                    </td>
                                    <td><?= $d['name'] ?></td>
                                    <td><?= $d['position'] ?></td>
                                    <td><?= $d['address'] ?></td>
                                    <td class="table-action">
                                        <!-- <a type="button" class="action-icon" data-bs-toggle="modal" data-bs-target="#update_data_pengurus"><i class="mdi mdi-square-edit-outline"></i></a> -->
                                        <a href="<?= base_url('admin/santri/delete/') . $d['id_pengurus'] ?>" data-id="<?= $d['id_pengurus'] ?>" class="action-icon delete-btn">
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


<!--  Modal content for the Large example -->
<div class="modal fade" id="add_data_pengurus" tabindex="-1" role="dialog" aria-labelledby="add_data_pengurus" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="formPengurus" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title" id="add_data_pengurus">Tambah Data Pengurus</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Profile Gambar</label>
                        <input class="form-control" type="file" id="formFile" name="image_profile">
                        <span class="invalid-feedback" role="alert" id="error-image"></span>
                    </div>
                    <div class="mb-3">
                        <div id="preview-container text-center">
                            <div class="preview"></div>
                            <!-- <img id="preview" alt="Preview" class="img-fluid" height="300" > -->
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap">
                        <span class="invalid-feedback" role="alert" id="error-name"></span>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Posisi atau Jabatan</label>
                        <input type="text" class="form-control" id="position" name="position" placeholder="Posisi atau Jabatan">
                        <span class="invalid-feedback" role="alert" id="error-position"></span>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Alamat">
                        <span class="invalid-feedback" role="alert" id="error-address"></span>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Tambahkan modal untuk edit data -->
<div class="modal fade" id="edit_data_pengurus" tabindex="-1" role="dialog" aria-labelledby="edit_data_pengurus" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="formEditPengurus" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title" id="edit_data_pengurus">Edit Data Pengurus</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit_id" name="edit_id">

                    <div class="mb-3">
                        <label for="edit_image_profile" class="form-label">Profile Gambar</label>
                        <input class="form-control" type="file" id="edit_image_profile" name="edit_image_profile" onchange="editPreviewImage(this)">
                        <span class="invalid-feedback" role="alert" id="error-edit-image"></span>
                    </div>
                    <div class="mb-3">
                        <div id="edit-preview-container" class="text-center">
                            <div class="preview"></div>
                            <!-- <img id="edit-preview" alt="Preview" class="img-fluid"> -->
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="edit_name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="edit_name" name="edit_name" placeholder="Nama Lengkap">
                        <span class="invalid-feedback" role="alert" id="error-edit-name"></span>
                    </div>
                    <div class="mb-3">
                        <label for="edit_position" class="form-label">Posisi atau Jabatan</label>
                        <input type="text" class="form-control" id="edit_position" name="edit_position" placeholder="Posisi atau Jabatan">
                        <span class="invalid-feedback" role="alert" id="error-edit-position"></span>
                    </div>
                    <div class="mb-3">
                        <label for="edit_address" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="edit_address" name="edit_address" placeholder="Alamat">
                        <span class="invalid-feedback" role="alert" id="error-edit-address"></span>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?= $this->endSection(); ?>
