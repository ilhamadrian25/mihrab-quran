<?= $this->extend('layouts/wrapper'); ?>
<?= $this->section('content'); ?>
	<div class="hero overlay" style="background-image: url('<?= base_url('image/pages/') . $banner1['background'] ?>')">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 text-left">
					<span class="subheading-white text-white mb-3" data-aos="fade-up"><?= $banner1['title'] ?></span>
					<h1 class="heading text-white mb-2" data-aos="fade-up"><?= $banner1['heading'] ?></h1>
					<p data-aos="fade-up" class=" mb-5 text-white lead text-white-50"><?= $banner1['description'] ?></p>
					<p data-aos="fade-up"  data-aos-delay="100">
						<a href="<?= base_url('campaign') ?>" class="btn btn-primary me-4 d-inline-flex align-items-center"><span>Donasi Sekarang</span></a> 
					</p>		
				</div>
			</div>
		</div>
	</div>	

</br>
</br>
		<div class="section bg-light">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5" data-aos="fade-up">
					<span class="subheading mb-3"><?= $banner2['title'] ?></span>
					<h2 class="heading mb-4"><?= $banner2['heading'] ?></h2>
					<p>
						<?= $banner2['description'] ?>
					</p>
				</div>		
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
					<div class="row section-counter">
						<div class="col-lg-6">
							<div class="counter">
								<i class="flaticon-social-services d-block text-secondary"></i>
								
								<span class="number countup"><?= $donatur ?></span>
								<span class="d-block">Donasi</span>
							</div>

							<?php 
								function formatAngka($number) {
									$suffix = '';
									
									if ($number >= 1000000000) {
										$number = round($number / 1000000000, 0);
										$suffix = ' Milyar';
									} elseif ($number >= 1000000) {
										$number = round($number / 1000000, 0);
										$suffix = ' Juta';
									} elseif ($number >= 1000) {
										$number = round($number / 1000, 0);
										$suffix = ' Ribu';
									}
									
									return $number . $suffix;
								}
							?>

							<div class="counter">
								<i class="flaticon-charity-money d-block text-secondary"></i>
								<span class="number countub">Rp <?= formatAngka($donation) ?></span>
								<span class="d-block">Donasi Terkumpul</span>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="counter mt-5">
								<i class="flaticon-money-donation d-block text-secondary"></i>
								<span class="number countup"><?= count($campaign) ?></span>
								<span class="d-block">Program</span>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>		
	</div> 	

	<div class="section">
		<div class="container">
			<div class="row mb-5 align-items-center justify-content-between">
			</div>
			<div class="row justify-content-between">
				<div class="col-lg-5 pe-lg-5" data-aos="fade-up" data-aos-delay="200">
				<div class="col-lg-20" data-aos="fade-up" data-aos-delay="0">
					<span class="subheading mb-3"><?= $banner3['title'] ?></span>
					<h2 class="heading"><?= $banner3['heading'] ?></h2>
					<p>
						
						<?= substr($profile['description'], 0, 690); ?>
						<br>
						<span>
							<a href="<?= base_url('profile') ?>">Lihat selengkapnya...</a>
						</span>
					</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="overlap-imgs">
						<img src="<?= base_url('image/pages/') . $banner3['background'] ?>" alt="Image" class="img-fluid rounded" data-aos="fade-up" data-aos="100">
					</div>
				</div>		
			</div>		
		</div>		
	</div>
	
	<div class="section flip-section secondary-bg" style="background-image: url('<?= base_url('image/pages/') . $banner4['background'] ?>')">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto text-center">
					<span class="subheading-white mb-3 text-white" data-aos="fade-up"><?= $banner4['title'] ?></span>
					<h3 class="mb-4 heading text-white" data-aos="fade-up"><?= $banner4['heading'] ?></h3>
					<a href="<?= base_url('campaign') ?>" class="btn btn-outline-white me-3" data-aos="fade-up" data-aos-delay="100">Donasi Sekarang</a>
				</div>		
			</div>		
		</div>		
	</div>
	
</br>
</br>

<div class="section cause-section bg-light">
	
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
				<h2 class="heading"><?= $banner5['title'] ?></h2>
				<p><?= $banner5['description'] ?></p>
				
				<div id="features-slider-nav" class="mt-5 d-flex justify-content-center">
					<button  class="btn btn-primary prev d-flex align-items-center me-2" data-controls="prev"> <span class="icon-chevron-left"></span> <span class="ms-3">Prev</span></button>
					<button class="btn btn-primary next d-flex align-items-center" data-controls="next"><span class="me-3">Next</span> <span class="icon-chevron-right"></span></button>
					<a href="<?= base_url('campaign') ?>">
					</div>
				</div>
			</div>	
		</div>
		
		<div class="container mb-5">
			<div class="features-slider-wrap position-relative" data-aos="fade-up" data-aos-delay="100">
				<div class="features-slider" id="features-slider">

					<?php foreach($campaign as $c) : ?>
					<div class="item">
						<div class="causes-item bg-white">
							<a href="<?= base_url('c/') . $c['slug'] ?>">
								<div class="text-center">
									<img src="<?= base_url('uploads/') . $c['image'] ?>" alt="Image" class="img-fluid mb-4 rounded">
								</div>
							</a>
							<div class="px-4 pb-5 pt-3">

								<h3><a href="<?= base_url('c/') . $c['slug'] ?>"><?= $c['title'] ?></a></h3>
								    <?php
									$limit = 100;

									if (strlen($c['description']) > $limit) {
										$text = substr($c['description'], 0, $limit) . "...";
									} else {
										$text = $c['description'];
									}
									?>
								<p><?= $text ?></p>

								<?php 
									$target = 'Rp ' . number_format($c['target_donation'], 0, ',', '.');
									$total = 'Rp ' . number_format($c['total_donation'], 0, ',', '.');

									$percentage = min(($c['total_donation'] / $c['target_donation']) * 100, 100);
									$persen = number_format($percentage, 0);
								?>

								<div class="progress mb-2">
									<div class="progress-bar" role="progressbar" style="width: <?= $persen ?>%;" aria-valuenow="<?= $persen ?>" aria-valuemin="0" aria-valuemax="100"><?= $persen ?>%</div>
								</div>

								<div class="d-flex mb-4 justify-content-between amount">
									<div><?= $total ?>,00</div>
									<div><?= $target ?>,00</div>
								</div>
								<div class="text-center">
									<a href="<?= base_url('c/') . $c['slug'] ?>" class="btn btn-primary">Donasi Sekarang</a>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach ?>

				</div>
			</div>
		</div>


	</div>
<?= $this->endSection(); ?>