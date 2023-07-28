<!-- /*
* Template Name: Volunteer
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Inovindo">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="donasi" />
	<meta name="keywords" content="mihrab quran, donasi, bantu saudara saudara kita yang membutuhkan" />

	<meta charset="utf-8">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="css2/profil.css">
    <link rel="stylesheet" href="css2/slider.css">
	<script src="js/profil.js" defer></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="<?= base_url() ?>fonts/icomoon/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="<?= base_url() ?>css/tiny-slider.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/aos.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/flatpickr.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/glightbox.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/style.css">

	<title><?= $title ?> - <?= $settings['title'] ?></title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="<?= base_url() ?>" class="logo m-0 float-start text-white"><?= $settings['title'] ?></a>
						</div>
						<div class="col-8 text-center">
							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="<?= (service('request')->uri->getSegment(1) === "/" || service('request')->uri->getSegment(1) === "") ? 'active' : ''; ?>"><a href="<?= base_url('/') ?>">Beranda</a></li>
								<li class="has-children <?= (service('request')->uri->getSegment(1) === "santri" || service('request')->uri->getSegment(1) === "profile")  ? 'active' : ''; ?>">
									<a href="#">Profil</a>
									<ul class="dropdown">
										<li><a href="<?= base_url('profile') ?>">Profil Mihrab Quran</a></li>
										<li class="<?= (service('request')->uri->getSegment(1) === "santri") ? 'active' : ''; ?>"><a href="<?= base_url('santri') ?>">Data Santri</a></li>
									</ul>
								</li>
								<li class="<?= (service('request')->uri->getSegment(1) === "campaign") ? 'active' : ''; ?>"><a href="<?= base_url('campaign') ?>">Program</a></li>
								<li class="<?= (service('request')->uri->getSegment(1) === "mqa-tv") ? 'active' : ''; ?>"><a href="<?= base_url('mqa-tv') ?>">MQA TV</a></li>
								<li class="<?= (service('request')->uri->getSegment(1) === "gallery") ? 'active' : ''; ?>"><a href="<?= base_url('gallery') ?>">Album</a></li>
								<li class="<?= (service('request')->uri->getSegment(1) === "article" || service('request')->uri->getSegment(1) === "a") ? 'active' : ''; ?>"><a href="<?= base_url('article') ?>">Artikel</a></li>
								<li><a href="#footer">Kontak</a></li>
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>

						</div>
					</div>

				</div>
			</div>
		</div>
	</nav>

	<div class="hero overlay" style="background-image: url('<?= base_url('image/pages/') . $profile['background'] ?>')">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 text-center">
					<h1 class="heading text-white mb-2" data-aos="fade-up"><?= $profile['title'] ?></br> <?= $settings['title'] ?></h1>	
					
				</div>

				
			</div>
		</div>
	</div>

  <body>
<div class="box">
  <img src="img/logo.png" alt="" class="box-img">
  <h1><?= $settings['title'] ?></h1>
</br>
  <?= $profile['description'] ?>
</div>
</br>

<h1 style="text-align: center; font-weight: bold;">Pengurus Mihrab </br> Quran Al-Fatih</h1>
</br>
</br>
</br>
<section>
    <div class="wrapper">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <ul class="carousel">
        <?php foreach($data as $d) : ?>
        <li class="card">
          <div class="img"><img src="<?= base_url('uploads/') . $d['profile_image'] ?>" alt="img" draggable="false"></div>
          <h2><?= $d['name'] ?></h2>
          <span><?= $d['position'] ?></span>
        </li>
        <?php endforeach ?>
      </ul>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
</section>
</br>
</br>
</br>
</br>


<section class="footer" id="footer">
		<div class="site-footer">
			<div class="container">

				<div class="row">
						<div class="col-6 col-sm-6 col-md-6 col-lg-3">
						<div class="widget">
							<h3>Hubungi kami</h3>
							<address><?= $contact['address'] ?></address>
							<ul class="list-unstyled links mb-4">
								<li><a href="tel://<?= $contact['no_telp'] ?>"><?= $contact['no_telp'] ?></a></li>
								<li><a href="mailto:<?= $contact['email'] ?>"><?= $contact['email'] ?></a></li>
							</ul>

							<h3>Ikuti kami</h3>
							<ul class="list-unstyled social">
								<li><a href="<?= $social_media['facebook_url'] ?>"><span class="icon-facebook"></span></a></li>
								<li><a href="<?= $social_media['instagram_url'] ?>"><span class="icon-instagram"></span></a></li>
								<li><a href="<?= $social_media['youtube_url'] ?>"><span class="icon-youtube"></span></a></li>
							</ul>

						</div> <!-- /.widget -->
					</div> <!-- /.col-lg-3 -->

					<div class="col-6 col-sm-6 col-md-6 col-lg-3">

						<!-- space 1 -->

					</div> <!-- /.col-lg-3 -->

					<div class="col-6 col-sm-6 col-md-6 col-lg-3">

						<div class="widget">
							<h3>Temukan Kami</h3>
							<iframe src="<?= $contact['maps'] ?>" width="365" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div> <!-- /.widget -->

					</div> <!-- /.col-lg-3 -->


				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					</div> <!-- /.col-lg-3 -->

				</div> <!-- /.row -->


				<div class="row">
					<div class="col-12 text-center">
						<p class="copyright">Copyright &copy; <a href="<?= base_url() ?>">Mihrab Quran Al-Fatih</a> 2020 - <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Developed by <a href="https://inovindo.co.id/index/">Inovindo</a> <!-- License information: https://untree.co/license/ -->
						</p>
					</div>
				</div>
			</div> <!-- /.container -->
		</div> <!-- /.site-footer -->
	</section>


	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>

	<script src="<?= base_url() ?>js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>js/tiny-slider.js"></script>

	<script src="<?= base_url() ?>js/flatpickr.min.js"></script>
	<script src="<?= base_url() ?>js/glightbox.min.js"></script>


	<script src="<?= base_url() ?>js/aos.js"></script>
	<script src="<?= base_url() ?>js/navbar.js"></script>
	<script src="<?= base_url() ?>js/counter.js"></script>
	<script src="<?= base_url() ?>js/custom.js"></script>
</body>
</html>
