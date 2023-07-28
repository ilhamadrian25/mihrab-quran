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
                        <li class="breadcrumb-item active">Mqa TV</li>
                    </ol>
                </div>
                <h4 class="page-title">Mqa Tv</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addVideoModal">
                                            <i class="mdi mdi-plus-circle me-2"></i> Tambah data
                                        </button>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="alt-pagination-preview">
                                                <table id="alternative-page-datatable" class="table dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <span>NO</span>
                                                        </th>
                                                        <th class="all">Video</th>
                                                        <th style="width: 85px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1; foreach($data as $d) : ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <?php
                                                                        $url = $d['url_video'];

                                                                        // Mendapatkan ID video dari URL
                                                                        $videoId = '';
                                                                        $videoUrlParts = parse_url($url);
                                                                        if (isset($videoUrlParts['path'])) {
                                                                            $pathParts = explode('/', trim($videoUrlParts['path'], '/'));
                                                                            $videoId = end($pathParts);
                                                                        }

                                                                        // Membentuk URL embed
                                                                        $embedUrl = "https://www.youtube.com/embed/" . $videoId;

                                                                        // Membentuk kode embed
                                                                        $embedCode = '<iframe width="560" height="315" src="' . $embedUrl . '" frameborder="0" allowfullscreen></iframe>';

                                                                        // Tampilkan kode embed
                                                                        echo $embedCode;
                                                                    ?>
                                                                </div>
                                                            </td>
                                                            <td class="table-action">
                                                                <a href="javascript:void(0);" class="action-icon delete-data" data-id="<?= $d['id_mqa_tv'] ?>"> <i class="mdi mdi-delete"></i></a>
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

<!-- Add Video Modal -->
<div class="modal fade" id="addVideoModal" tabindex="-1" aria-labelledby="addVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addVideoModalLabel">Tambah Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addVideoForm">
                    <div class="mb-3">
                        <label for="url_video" class="form-label">URL Video</label>
                        <input type="text" class="form-control" id="url_video" name="url_video" placeholder="Masukkan URL Video YouTube" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="submitVideo">Tambah</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
