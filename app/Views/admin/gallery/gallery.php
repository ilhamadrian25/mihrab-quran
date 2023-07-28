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
                        <li class="breadcrumb-item active">Album</li>
                    </ol>
                </div>
                <h4 class="page-title">Album</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addAlbumModal">
                                            <i class="mdi mdi-plus-circle me-2"></i> Tambah data
                                        </button>

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="alt-pagination-preview">
                                                <table id="alternative-page-datatable" class="table dt-responsive nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th class="all" style="width: 20px;">
                                                            <span>NO</span>
                                                        </th>
                                                        <th class="all text-center">Album</th>
                                                        <th style="width: 85px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1; foreach($data as $album) : ?>
                                                    <tr>
                                                        <td>
                                                            <span><?= $no++ ?></span>
                                                        </td>
                                                        <td>
                                                            <div class="text-center">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#albumModal<?= $album['id_gallery'] ?>">
                                                                    <img src="<?= base_url('uploads/') . $album['image'] ?>" alt="Album Image" class="rounded me-3" height="48">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td class="table-action">
                                                            <a href="javascript:void(0);" class="action-icon delete-album" data-id="<?= $album['id_gallery'] ?>">
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

<!-- Add Album Modal -->
<div class="modal fade" id="addAlbumModal" tabindex="-1" aria-labelledby="addAlbumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAlbumModalLabel">Tambah Album</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addAlbumForm" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="formFile" name="albumImage" accept="image/*">
                    </div>
                    <div class="mb-3 text-center">
                        <div class="preview"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Album Modals -->
<?php foreach($data as $album) : ?>
<div class="modal fade" id="albumModal<?= $album['id_gallery'] ?>" tabindex="-1" aria-labelledby="albumModalLabel<?= $album['id_gallery'] ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background: transparent; border: none;">
            <div class="text-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="<?= base_url('uploads/') . $album['image'] ?>" alt="Album Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>
<?= $this->endSection(); ?>
