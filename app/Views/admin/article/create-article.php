<?= $this->extend('admin/layouts/wrapper'); ?>
<?= $this->section('content'); ?>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<!-- Start Content-->
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/article') ?>">Artikel</a></li>
                        <li class="breadcrumb-item active">Buat Artikel</li>
                    </ol>
                </div>
                <h4 class="page-title">Buat Artikel</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <form id="formArticle" method="POST" enctype="multipart/form-data">

            <div class="col-12">
                <div class="card">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Gambar</label>
                            <input class="form-control" name="image" type="file" id="formFile">
                        </div>
                        
                        <div class="previw"></div>
                        
                        <div class="mb-2 mt-2">
                            <h4 class="header-title m-t-0">Konten</h4>
                            <div id="editor" name="content">

                            </div>
                            <!-- end tab-content-->
                            
                        </div>
                        <h5 class="mb-3">Status Artikel</h5>
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" name="status" aria-label="Floating label select example">
                                <option value="draft">Draft</option>
                                <option value="publish">Publish</option>
                            </select>
                            <label for="floatingSelect">Status Artikel</label>
                        </div>
                        <div class="text-end mt-2">
                            <button type="submit" class="btn btn-primary" id="createArticleBtn">BUAT</button>
                        </div>
                    </li>
                </ul>
                <!-- end list-->
            </div>
        </form>
            <!-- end card-->
        </div>
        <!-- end col-->
    </div>
    <!-- end row -->
</div>
<!-- container -->
                    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>              <!-- jQuery -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                    <!-- SweetAlert -->
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                    <script>    
                        $(document).ready(function() {
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    $('#formFile').on('change', function() {
        readURL(this);
    });

    $('#formArticle').submit(function(e) {
        e.preventDefault();

        var editorContent = quill.root.innerHTML;

        var formData = new FormData(this);
        formData.append('content', editorContent);

        $.ajax({
            url: '<?= base_url('admin/article') ?>',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses',
                        text: response.message,
                    }).then(function() {
                        window.location.reload();
                    });
                } else if (response.status === 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Terjadi kesalahan: ' + response.message,
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Terjadi kesalahan saat mengirim data.',
                });
            }
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.previw').html('<img src="' + e.target.result + '" class="img-thumbnail" width="200" height="200" />');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
});

                    </script>
<?= $this->endSection(); ?>