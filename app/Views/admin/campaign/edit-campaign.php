<?= $this->extend('admin/layouts/wrapper'); ?>
<?= $this->section('content'); ?>
<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<style>
    .preview-image {
        max-width: 320px;
        max-height: 400px;
    }
</style>
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
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/campaign/details/') . $data['slug'] ?>">Details</a></li>
                        <li class="breadcrumb-item active"><?= $data['title'] ?></li>
                    </ol>
                </div>
                <h4 class="page-title">Edit - <?= $data['title'] ?></h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <form id="update-campaign" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <input type="text" id="id" name="id" class="form-control" placeholder="Judul" value="<?= $data['id_program'] ?>" hidden>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Judul</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Judul" value="<?= $data['title'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <div id="editor">
                                    <?= $data['description'] ?>
                                </div>
                            </div>

                            <!-- Date View -->
                            <div class="mb-3 position-relative" id="datepicker2">
                                <label class="form-label">Tanggal mulai</label>
                                <input type="date" class="form-control" name="start_date" id="start_date" value="<?= $data['end_date'] ?>" data-date-container="#datepicker2">
                                <div id="end_dateError" class="text-danger"></div>
                            </div>
                            <!-- Date View -->
                            <div class="mb-3 position-relative" id="datepicker2">
                                <label class="form-label">Tanggal akhir</label>
                                <input type="date" class="form-control" name="end_date" id="end_date" value="<?= $data['end_date'] ?>" data-date-container="#datepicker2">
                                <div id="end_dateError" class="text-danger"></div>
                            </div>


                            <div class="mb-3">
                                <label for="total_donation" class="form-label">Total donasi</label>
                                <input type="text" id="total_donation" class="form-control" value="<?= $data['total_donation'] ?>" placeholder="Total donasi" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="target_donation" class="form-label">Target donasi</label>
                                <input type="text" id="target_donation" oninput="updateCurrency()" onchange="updateCurrency()" name="target_donation" class="form-control" value="<?= $data['target_donation'] ?>" placeholder="Target donasi">
                                <p id="output"></p>
                            </div>

                            <div class="mb-3">
                                <label for="file" class="form-label">Gambar baru:</label>
                                <input type="file" name="background" class="form-control" id="formFile" accept="image/*" class="img-thumbnail" onchange="previewImage(event)">
                            </div>
                            <div class="text-center">
                                <div class="preview"></div>
                            </div>


                        </div> <!-- end col-->

                        <div class="col-xl-6">
                            <div class="mb-3 mt-3 mt-xl-0">
                                <label for="projectname" class="mb-2">Gambar lama : </label>

                                <div class="text-center">
                                    <img src="<?= base_url('uploads/') . $data['image'] ?>" style="width : 320px; height : 400px;" alt="" srcset="">
                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                    </div>
                    <!-- end row -->
                </form>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

</div> <!-- container -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
                    <script>
                            $('#formFile').on('change', function() {
                                readURL(this);
                                
                                function readURL(input) {
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = function(e) {
                                            $('.preview').html('<img src="' + e.target.result + '" class="img-thumbnail img-fluid" width="200" height="200" />');
                                        }
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }
                            });
                    </script>
<script>
var quill = new Quill('#editor', {
    theme: 'snow'
});
</script>
<script>
    $(document).ready(function() {
    $('#update-campaign').submit(function(e) {
        e.preventDefault();

            var form = $(this);
            var formData = new FormData(form[0]);
            var content = quill.root.innerHTML; // Mendapatkan konten HTML dari Quill Editor

            formData.append('description', content);

        $.ajax({
            url: '<?= base_url('admin/campaign/update/') . service('request')->uri->getSegment(4); ?>',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon tunggu',
                    html: 'Sedang memperbarui data...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function(response) {
                Swal.close();

                if (response.status === "success") {
                    Swal.fire(
                        'Sukses',
                        response.message,
                        response.status
                    ).then(()=> {
                        location.reload();
                    });
                } else {
                    Swal.fire(
                        'Gagal',
                        response.message,
                        response.status
                    );
                }
            },
            error: function() {
                Swal.close();

                Swal.fire(
                    'Error',
                    'Tidak dapat mengirim permintaan ke server!',
                    'error'
                );
            }
        });
    });
    });

    function updateCurrency() {
        var targetDonation = document.getElementById('target_donation').value;
        var output = document.getElementById('output');
        output.textContent = formatRupiah(targetDonation);
    }

    function formatRupiah(angka) {
        var number_string = angka.toString();
        var split = number_string.split(',');
        var sisa = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return 'Rp ' + rupiah;
    }
</script>
<?= $this->endSection(); ?>
