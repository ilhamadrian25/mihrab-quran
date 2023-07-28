<?= $this->extend('layouts/wrapper'); ?>
<?= $this->section('content'); ?>
<div class="hero overlay" style="background-image: url('<?= base_url('image/pages/') . $campaign['background'] ?>')">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 text-center mx-auto">
					<h1 class="heading text-white mb-2" data-aos="fade-up"><?= $campaign['title'] ?> - <?= $settings['title'] ?></h1>
					<p data-aos="fade-up"  data-aos-delay="100">
						<a href="#donate" class="btn btn-primary me-4">Donasi sekarang</a> 
					</p>		
					
				</div>

				
			</div>
		</div>
	</div>

    <div class="container">
	
		<div class="container">
            <br>
            <div class="row" id="donate">

                <?php foreach($data as $d) : ?>
				<div class="col-lg-4 col-md-6" data-name="sedekah">
					<div class="causes-item bg-white shadow-lg rounded">
						<a href="<?= base_url('c/') . $d['slug'] ?>"><img src="<?= base_url('uploads/') . $d['image'] ?>" alt="Image" class="img-fluid mb-4 rounded"></a>
						<div class="px-4 pb-5 pt-3">

							<h3><a href="<?= base_url('c/') . $d['slug'] ?>"><?= $d['title'] ?></a></h3>
                            <?php
							$limit = 100;

							if (strlen($d['description']) > $limit) {
								$text = substr($d['description'], 0, $limit) . "...";
							} else {
								$text = $d['description'];
							}
							?>
							<p><?= $text ?></p>
                            	<?php 
									$target = 'Rp ' . number_format($d['target_donation'], 0, ',', '.');
									$total = 'Rp ' . number_format($d['total_donation'], 0, ',', '.');

									$percentage = min(($d['total_donation'] / $d['target_donation']) * 100, 100);
									$persen = number_format($percentage, 0);
								?>
							<div class="progress mb-2">
								<div class="progress-bar" role="progressbar" style="width: <?= $persen ?>%;" aria-valuenow="<?= $persen ?>" aria-valuemin="0" aria-valuemax="100"><?= $persen ?>%</div>
							</div>


							<div class="d-flex mb-4 justify-content-between amount">
                                <?php
                                    $total = number_format($d['total_donation'], 0, ',', '.');
                                    $target = number_format($d['target_donation'], 0, ',', '.');
                                ?>
								<div>Rp <?= $total ?></div>
								<div>Rp <?= $target ?></div>
							</div>
							<div>
								<a href="<?= base_url('c/') . $d['slug'] ?>" class="btn btn-primary">Donasi sekarang</a>
							</div>
						</div>
					</div>
				</div>	
                <?php endforeach ?>	

			</div>		
		</div>		
	</div>

    <?= $this->endSection(); ?>
