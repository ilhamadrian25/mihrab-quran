<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Merupakan perusahaan Tekhnologi Informasi yang memiliki tenaga ahli muda yang berkompeten dan senantiasa mengutamakan pelayanan yang prima untuk klien / partner perusahaan. Inovindo berdedikasi dan berpengalaman lebih dari 10 tahun dalam memberikan layanan Jasa Pembuatan Website, Mobile Android &amp;amp; IOS Apps, Animasi 2D &amp;amp; 3D, Architecture Drawing &amp;amp; Rendering, Engineering Illutrator, Videography dan Jasa Optimasi Media Sosial. Perusahaan kami telah menyelesaikan lebih dari 1000 proyek untuk instansi pemerintahan/perusahaan dalam dan luar negeri.">
	<meta name="domain" content="<?= base_url(); ?>">
	<meta name="author" content="inovindo">
	<meta name="keywords" content="inovindo, inovindo web, jasa pembuatan website profesional, pembuatan website terpercaya, pembuatan website di bandung, jasa pembuatan animasi profesional">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= base_url() ?>">
    <meta property="og:title" content="<?= $settings['title'] ?>">
    <meta property="og:description" content="Merupakan perusahaan Tekhnologi Informasi yang memiliki tenaga ahli muda yang berkompeten dan senantiasa mengutamakan pelayanan yang prima untuk klien / partner perusahaan. Inovindo berdedikasi dan berpengalaman lebih dari 10 tahun dalam memberikan layanan Jasa Pembuatan Website, Mobile Android &amp;amp; IOS Apps, Animasi 2D &amp;amp; 3D, Architecture Drawing &amp;amp; Rendering, Engineering Illutrator, Videography dan Jasa Optimasi Media Sosial. Perusahaan kami telah menyelesaikan lebih dari 1000 proyek untuk instansi pemerintahan/perusahaan dalam dan luar negeri.">
    <meta property="og:image" content="https://inovindo.co.id/assets/images/icon-1676884654.png">
    <!-- Twitter -->
    <meta property="twitter:url" content="<?= base_url() ?>">
    <meta property="twitter:title" content="<?= $settings['title'] ?>">
    <meta property="twitter:description" content="Merupakan perusahaan Tekhnologi Informasi yang memiliki tenaga ahli muda yang berkompeten dan senantiasa mengutamakan pelayanan yang prima untuk klien / partner perusahaan. Inovindo berdedikasi dan berpengalaman lebih dari 10 tahun dalam memberikan layanan Jasa Pembuatan Website, Mobile Android &amp;amp; IOS Apps, Animasi 2D &amp;amp; 3D, Architecture Drawing &amp;amp; Rendering, Engineering Illutrator, Videography dan Jasa Optimasi Media Sosial. Perusahaan kami telah menyelesaikan lebih dari 1000 proyek untuk instansi pemerintahan/perusahaan dalam dan luar negeri.">
    <meta property="twitter:image" content="https://inovindo.co.id/assets/images/icon-1676884654.png">
	
	<?php if(service('request')->uri->getSegment(1) === "/" || service('request')->uri->getSegment(1) === "") : ?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	
	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/flatpickr.min.css">
	<link rel="stylesheet" href="css/glightboxx.min.css">
	<link rel="stylesheet" href="css/style.css">
	<?php endif ?>

	<?php if(service('request')->uri->getSegment(1) === "campaign") : ?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/flatpickr.min.css">
	<link rel="stylesheet" href="css/glightbox.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/filter.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<?php endif ?>

	<?php if(service('request')->uri->getSegment(1) === "profile") : ?>
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="css2/profil.css">
    <link rel="stylesheet" href="css2/slider.css">
	<script src="js/profil.js" defer></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">

	<?php endif ?>

	<?php if(service('request')->uri->getSegment(1) === "santri") : ?>	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css2/santri.css">
	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/flatpickr.min.css">
	<link rel="stylesheet" href="css/glightbox.min.css">
	<link rel="stylesheet" href="css/style.css">
	<?php endif ?>

	<?php if(service('request')->uri->getSegment(1) === "mqa-tv") : ?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/flatpickr.min.css">
	<link rel="stylesheet" href="css/glightbox.min.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css2/mqa.css">
	<?php endif ?>

	<?php if(service('request')->uri->getSegment(1) === "gallery") : ?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/flatpickr.min.css">
	<link rel="stylesheet" href="css/glightbox.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css2/album.css">
    <!-- magnific-popup css cdn link  -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
	<?php endif ?>

	<?php if(service('request')->uri->getSegment(1) === "profile") : ?>
	<script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="css2/profil.css">
    <link rel="stylesheet" href="css2/slider.css">
	<script src="profil.js" defer></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/flatpickr.min.css">
	<link rel="stylesheet" href="css/glightbox.min.css">
	<link rel="stylesheet" href="css/style.css">
	<?php endif ?>

	<?php if(service('request')->uri->getSegment(1) === "article") : ?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/flatpickr.min.css">
	<link rel="stylesheet" href="css/glightbox.min.css">
	<link rel="stylesheet" href="css/style.css">
	<?php endif ?>
	<?php if(service('request')->uri->getSegment(1) === "a") : ?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="<?= base_url() ?>fonts/icomoon/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="<?= base_url() ?>css/tiny-slider.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/aos.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/flatpickr.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/glightbox.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>css/style.css">

    <link rel="stylesheet" href="<?= base_url() ?>css/share.css" />
    <link rel="stylesheet" href="<?= base_url() ?>css/artikel.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
    />
	<?php endif ?>
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
    <?= $this->renderSection('content'); ?>

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

	<?php if(service('request')->uri->getSegment(1) === "/" || service('request')->uri->getSegment(1) === "") : ?>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>

	<script src="js/flatpickr.min.js"></script>
	<script src="js/glightbox.min.js"></script>


	<script src="js/aos.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/custom.js"></script>
	<?php endif ?>

	<?php if(service('request')->uri->getSegment(1) === "campaign") : ?>
			<script>
        // Filter causes on button click
			$(document).ready(function () {
				// Show all causes by default
				filterCauses('all');

				// Filter causes when a button is clicked
				$('#filter-buttons button').click(function () {
					var filter = $(this).data('filter');
					filterCauses(filter);
				});
			});

			// Function to filter causes based on the selected filter
			function filterCauses(filter) {
				if (filter === 'all') {
					$('#causes-list .col-lg-4').show();
				} else {
					$('#causes-list .col-lg-4').hide();
					$('#causes-list .col-lg-4[data-name="' + filter + '"]').show();
				}
			}
				
					// Ambil semua tombol filter
					const filterButtons = document.querySelectorAll('#filter-buttons button');
				
					// Tambahkan event listener untuk setiap tombol filter
					filterButtons.forEach(button => {
					button.addEventListener('click', function() {
						// Hapus kelas 'active' dari semua tombol filter
						filterButtons.forEach(btn => {
						btn.classList.remove('active');
						});
				
						// Tambahkan kelas 'active' pada tombol yang diklik
						this.classList.add('active');
					});
					});
				</script>
	  
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>

	<script src="js/flatpickr.min.js"></script>
	<script src="js/glightbox.min.js"></script>
	

	<script src="js/aos.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/custom.js"></script>
	<!-- Code injected by live-server -->
	<script>
		// <![CDATA[  <-- For SVG support
		if ('WebSocket' in window) {
			(function () {
				function refreshCSS() {
					var sheets = [].slice.call(document.getElementsByTagName("link"));
					var head = document.getElementsByTagName("head")[0];
					for (var i = 0; i < sheets.length; ++i) {
						var elem = sheets[i];
						var parent = elem.parentElement || head;
						parent.removeChild(elem);
						var rel = elem.rel;
						if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
							var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
							elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
						}
						parent.appendChild(elem);
					}
				}
				var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
				var address = protocol + window.location.host + window.location.pathname + '/ws';
				var socket = new WebSocket(address);
				socket.onmessage = function (msg) {
					if (msg.data == 'reload') window.location.reload();
					else if (msg.data == 'refreshcss') refreshCSS();
				};
				if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
					console.log('Live reload enabled.');
					sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
				}
			})();
		}
		else {
			console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
		}
		// ]]>
	</script>
	<?php endif ?>

	<?php if(service('request')->uri->getSegment(1) === "santri") : ?>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>

	<script src="js/flatpickr.min.js"></script>
	<script src="js/glightbox.min.js"></script>


	<script src="js/aos.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/custom.js"></script>
	<!-- Code injected by live-server -->
	<script>
		// <![CDATA[  <-- For SVG support
		if ('WebSocket' in window) {
			(function () {
				function refreshCSS() {
					var sheets = [].slice.call(document.getElementsByTagName("link"));
					var head = document.getElementsByTagName("head")[0];
					for (var i = 0; i < sheets.length; ++i) {
						var elem = sheets[i];
						var parent = elem.parentElement || head;
						parent.removeChild(elem);
						var rel = elem.rel;
						if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
							var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
							elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
						}
						parent.appendChild(elem);
					}
				}
				var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
				var address = protocol + window.location.host + window.location.pathname + '/ws';
				var socket = new WebSocket(address);
				socket.onmessage = function (msg) {
					if (msg.data == 'reload') window.location.reload();
					else if (msg.data == 'refreshcss') refreshCSS();
				};
				if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
					console.log('Live reload enabled.');
					sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
				}
			})();
		}
		else {
			console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
		}
		// ]]>
	</script>
<?php endif ?>

<?php if(service('request')->uri->getSegment(1) === "mqa-tv") : ?>
	    <script>
        document.querySelectorAll('.video-container video').forEach(vid => {
            vid.onclick = () =>{
                document.querySelector('.popup-video').style.display = 'block';
                document.querySelector('.popup-video video').src = vid.getAttribute('src');
            }
        });

        document.querySelector('.popup-video span').onclick = () =>{
            document.querySelector('.popup-video').style.display = 'none';
        }

    </script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>

	<script src="js/flatpickr.min.js"></script>
	<script src="js/glightbox.min.js"></script>


	<script src="js/aos.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/custom.js"></script>
<?php endif ?>

<?php if(service('request')->uri->getSegment(1) === "gallery") : ?>
	
	<!-- jquery cdn link  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- magnific popup js cdn link  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

	<script>
	$(document).ready(function(){

		$('.buttonss').click(function(){

			$(this).addClass('active').siblings().removeClass('active');

			var filter = $(this).attr('data-filter')

			if(filter == 'all'){
				$('.image').show(400);
			}else{
				$('.image').not('.'+filter).hide(200);
				$('.image').filter('.'+filter).show(400);
			}

		});

		$('.gallery').magnificPopup({

			delegate:'a',
			type:'image',
			gallery:{
				enabled:true
			}

		});

	});
	</script>
	<!-- Code injected by live-server -->
	<script>
		// <![CDATA[  <-- For SVG support
		if ('WebSocket' in window) {
			(function () {
				function refreshCSS() {
					var sheets = [].slice.call(document.getElementsByTagName("link"));
					var head = document.getElementsByTagName("head")[0];
					for (var i = 0; i < sheets.length; ++i) {
						var elem = sheets[i];
						var parent = elem.parentElement || head;
						parent.removeChild(elem);
						var rel = elem.rel;
						if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
							var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
							elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
						}
						parent.appendChild(elem);
					}
				}
				var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
				var address = protocol + window.location.host + window.location.pathname + '/ws';
				var socket = new WebSocket(address);
				socket.onmessage = function (msg) {
					if (msg.data == 'reload') window.location.reload();
					else if (msg.data == 'refreshcss') refreshCSS();
				};
				if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
					console.log('Live reload enabled.');
					sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
				}
			})();
		}
		else {
			console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
		}
		// ]]>
	</script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>

	<script src="js/flatpickr.min.js"></script>
	<script src="js/glightbox.min.js"></script>


	<script src="js/aos.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/custom.js"></script>
<?php endif ?>

<?php if(service('request')->uri->getSegment(1) === "profile") : ?>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>

	<script src="js/flatpickr.min.js"></script>
	<script src="js/glightbox.min.js"></script>


	<script src="js/aos.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/custom.js"></script>
<?php endif ?>

<?php if(service('request')->uri->getSegment(1) === "article") : ?>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>

	<script src="js/flatpickr.min.js"></script>
	<script src="js/glightbox.min.js"></script>


	<script src="js/aos.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/custom.js"></script>
<?php endif ?>
<?php if(service('request')->uri->getSegment(1) === "a") : ?>
	<script src="<?= base_url() ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>js/tiny-slider.js"></script>
    
    <script src="<?= base_url() ?>js/flatpickr.min.js"></script>
    <script src="<?= base_url() ?>js/glightbox.min.js"></script>
    
    
    <script src="<?= base_url() ?>js/aos.js"></script>
    <script src="<?= base_url() ?>js/navbar.js"></script>
    <script src="<?= base_url() ?>js/counter.js"></script>
    <script src="<?= base_url() ?>js/custom.js"></script>
<?php endif ?>
</body>
</html>


