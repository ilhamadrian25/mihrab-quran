<?= $this->extend('admin/layouts/wrapper'); ?>
<?= $this->section('content') ?>
<!-- Include stylesheet -->
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
                                            <li class="breadcrumb-item active">Website</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Pengaturan Website</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Website</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="update-website"  method="POST" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">Nama</label>
                                                        <input type="text" id="simpleinput" name="title" value="<?= $settings['title'] ?>" class="form-control">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>                     
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Kontak</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="update-form" method="POST">
                                                    <div class="mb-3">
                                                        <label for="address" class="form-label">Alamat</label>
                                                        <textarea class="form-control" id="address" name="address" rows="5"><?= $contact['address'] ?></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="no_telp" class="form-label">No Telepon</label>
                                                        <input type="text" id="no_telp" name="no_telp" value="<?= $contact['no_telp'] ?>" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" id="email" name="email" value="<?= $contact['email'] ?>" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="maps" class="form-label">Maps</label>
                                                        <textarea class="form-control" id="maps" name="maps" rows="5"><?= $contact['maps'] ?></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>                     
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Sosial Media</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="update-social-media" method="POST">
                                                    <div class="mb-3">
                                                        <label for="facebook" class="form-label">Url facebook</label>
                                                        <input type="text" id="facebook_url" name="facebook_url" value="<?= $socialmedia['facebook_url'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="youtube" class="form-label">Url youtube</label>
                                                        <input type="text" id="youtube_url" name="youtube_url" value="<?= $socialmedia['youtube_url'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="instagram" class="form-label">Url instagram</label>
                                                        <input type="text" id="instagram_url" name="instagram_url" value="<?= $socialmedia['instagram_url'] ?>" class="form-control">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>                     
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Beranda - Banner 1</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="update-banner-home" method="POST" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Judul</label>
                                                        <input type="text" id="title" name="title" value="<?= $banner1['title'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="heading" class="form-label">Heading</label>
                                                        <input type="text" id="heading" name="heading" value="<?= $banner1['heading'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Deskripsi</label>
                                                        <textarea class="form-control" id="description" name="description" rows="5"><?= $banner1['description'] ?></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Background lama</label>
                                                        <img src="<?= base_url('image/pages/') . $banner1['background'] ?>" class="img-fluid" alt="" srcset="">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="background" class="form-label">Background baru</label>
                                                        <input class="form-control" type="file" id="background" name="background">
                                                    </div>
                                                    <div class="mb-3 ">
                                                        <div id="preview-background-banner1"></div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>                     
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Beranda - Banner 2</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="update-banner-home2" method="POST" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Judul</label>
                                                        <input type="text" id="title" name="title" value="<?= $banner2['title'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="heading" class="form-label">Heading</label>
                                                        <input type="text" id="heading" name="heading" value="<?= $banner2['heading'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Deskripsi</label>
                                                        <textarea class="form-control" id="description" name="description" rows="5"><?= $banner2['description'] ?></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>                     
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Beranda - Banner 3</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="update-banner-home3" method="POST" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Judul</label>
                                                        <input type="text" id="title" name="title" value="<?= $banner3['title'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="heading" class="form-label">Heading</label>
                                                        <input type="text" id="heading" name="heading" value="<?= $banner3['heading'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Deskripsi</label>
                                                        <textarea class="form-control" id="description" name="description" rows="5"><?= $banner3['description'] ?></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Background lama</label>
                                                        <img src="<?= base_url('image/pages/') . $banner3['background'] ?>" class="img-fluid" alt="" srcset="">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="formFileB3" class="form-label">Background baru</label>
                                                        <input class="form-control" type="file" id="formFileB3" name="background">
                                                    </div>
                                                    <div class="mb-3 ">
                                                        <div class="previewB3"></div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>                     
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Beranda - Banner 4</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="update-banner-home4" method="POST" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Judul</label>
                                                        <input type="text" id="title" name="title" value="<?= $banner4['title'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="heading" class="form-label">Heading</label>
                                                        <input type="text" id="heading" name="heading" value="<?= $banner4['heading'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Background lama</label>
                                                        <img src="<?= base_url('image/pages/') . $banner4['background'] ?>" class="img-fluid" alt="" srcset="">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="formFileB4" class="form-label">Background baru</label>
                                                        <input class="form-control" type="file" id="formFileB4" name="background">
                                                    </div>
                                                    <div class="mb-3 ">
                                                        <div class="previewB4"></div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>                     
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Profile</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="update-profile" method="POST" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Judul</label>
                                                        <input type="text" id="title" name="title" value="<?= $profile['title'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="heading" class="form-label">Heading</label>
                                                        <input type="text" id="heading" name="heading" value="<?= $profile['heading'] ?>" class="form-control">
                                                    </div>
                                                    <div id="editor" class="mb-3" name="description">
                                                        <?= $profile['description'] ?>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Background lama</label>
                                                        <img src="<?= base_url('image/pages/') . $profile['background'] ?>" class="img-fluid" alt="" srcset="">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="formFileP" class="form-label">Background baru</label>
                                                        <input class="form-control" type="file" id="formFileP" name="background">
                                                    </div>
                                                    <div class="mb-3 ">
                                                        <div class="previewP"></div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>                     
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Santri</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="update-santri" method="POST" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Judul</label>
                                                        <input type="text" id="title" name="title" value="<?= $santri['title'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Background lama</label>
                                                        <img src="<?= base_url('image/pages/') . $santri['background'] ?>" class="img-fluid" alt="" srcset="">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="formFileS" class="form-label">Background baru</label>
                                                        <input class="form-control" type="file" id="formFileS" name="background">
                                                    </div>
                                                    <div class="mb-3 ">
                                                        <div class="previewS"></div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>                     
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Campaign</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="update-campaign" method="POST" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Judul</label>
                                                        <input type="text" id="title" name="title" value="<?= $campaign['title'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Background lama</label>
                                                        <img src="<?= base_url('image/pages/') . $campaign['background'] ?>" class="img-fluid" alt="" srcset="">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="formFileC" class="form-label">Background baru</label>
                                                        <input class="form-control" type="file" id="formFileC" name="background">
                                                    </div>
                                                    <div class="mb-3 ">
                                                        <div class="previewC"></div>
                                                        <!-- <div id="preview-background-santri"></div> -->
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>                     
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Mqa Tv</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="update-mqa-tv" method="POST" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Judul</label>
                                                        <input type="text" id="title" name="title" value="<?= $mqatv['title'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Background lama</label>
                                                        <img src="<?= base_url('image/pages/') . $mqatv['background'] ?>" alt="" class="img-fluid" srcset="">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="formFileM" class="form-label">Background baru</label>
                                                        <input class="form-control" type="file" id="formFileM" name="background">
                                                    </div>
                                                    <div class="mb-3 ">
                                                        <div class="previewM"></div>
                                                        <!-- <div id="preview-background-santri"></div> -->
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>                     
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Album</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="update-gallery" method="POST" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Judul</label>
                                                        <input type="text" id="title" name="title" value="<?= $gallery['title'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Background lama</label>
                                                        <img src="<?= base_url('image/pages/') . $gallery['background'] ?>" alt="" class="img-fluid" srcset="">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="formFileG" class="form-label">Background baru</label>
                                                        <input class="form-control" type="file" id="formFileG" name="background">
                                                    </div>
                                                    <div class="mb-3 ">
                                                        <div class="previewG"></div>
                                                        <!-- <div id="preview-background-santri"></div> -->
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>                     
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Artikel</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="update-article" method="POST" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Judul</label>
                                                        <input type="text" id="title" name="title" value="<?= $article['title'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Background lama</label>
                                                        <img src="<?= base_url('image/pages/') . $article['background'] ?>" alt="" class="img-fluid" srcset="">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="formFileA" class="form-label">Background baru</label>
                                                        <input class="form-control" type="file" id="formFileA" name="background">
                                                    </div>
                                                    <div class="mb-3 ">
                                                        <div class="previewA"></div>
                                                        <!-- <div id="preview-background-santri"></div> -->
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>                     
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Details Artikel</h4>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="update-details-article" method="POST" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Judul</label>
                                                        <input type="text" id="title" name="title" value="<?= $detailsarticle['title'] ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Background lama</label>
                                                        <img src="<?= base_url('image/pages/') . $detailsarticle['background'] ?>" alt="" class="img-fluid" srcset="">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="formFileD" class="form-label">Background baru</label>
                                                        <input class="form-control" type="file" id="formFileD" name="background">
                                                    </div>
                                                    <div class="mb-3 ">
                                                        <div class="previewD"></div>
                                                        <!-- <div id="preview-background-santri"></div> -->
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>                     
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                    </div> <!-- container -->
                      <!-- Memuat jQuery menggunakan CDN -->
  
<?= $this->endSection(); ?>