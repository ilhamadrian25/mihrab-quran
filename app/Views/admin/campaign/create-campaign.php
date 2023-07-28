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
                                            <li class="breadcrumb-item active">Buat Campaign</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Buat Campaign</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form id="uploadForm" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Judul</label>
                                                    <input type="text" id="title" name="title" class="form-control" placeholder="Judul" oninput="slugify()">
                                                    <div id="titleError" class="text-danger"></div>
                                                    <br>
                                                    <p>Slug: <span id="slug"></span></p>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="description" class="form-label">Deskripsi</label>
                                                    <div id="editor">
                                                    </div>
                                                    <div id="descriptionError" class="text-danger"></div>
                                                </div>

                                                <!-- Start date -->
                                                <div class="mb-3 position-relative" id="datepicker1">
                                                    <label class="form-label">Tanggal mulai</label>
                                                    <input type="date" class="form-control" name="start_date" id="start_date" data-date-container="#datepicker1" >
                                                    <div id="start_dateError" class="text-danger"></div>
                                                </div>
                                                
                                                <!-- End date -->
                                                <div class="mb-3 position-relative" id="datepicker2">
                                                    <label class="form-label">Tanggal Akhir</label>
                                                    <input type="date" class="form-control" name="end_date" id="end_date" data-date-container="#datepicker2" >
                                                    <div id="end_dateError" class="text-danger"></div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="target_donation" class="form-label">Target Donasi</label>
                                                    <input type="number" id="target_donation" name="target_donation" class="form-control" placeholder="cth: 100.000.000" oninput="updateCurrency()">
                                                    <div class="target_donationError" class="text-danger"></div>
                                                    <span id="outputDonation"></span>
                                                </div>

                                            </div> <!-- end col-->

                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Gambar:</label>
                                                    <input type="file" name="file" class="form-control" id="formFile" accept="image/*" class="img-thumbnail" >
                                                    <div class="imageError" class="text-danger"></div>
                                                </div>
                                                <div class="preview"></div>
                                                <!-- <img id="preview" alt="Preview" class="img-fluid"> -->
                                                </div>
                                            </div> <!-- end col-->
                                            <div class="text-end mt-2">
                                                <button type="submit" class="btn btn-primary">BUAT</button>
                                            </div>
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
<?= $this->endSection(); ?>