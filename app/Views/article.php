<?= $this->extend('layouts/wrapper'); ?>
<?= $this->section('content'); ?>
	<div class="hero overlay" style="background-image: url('<?= base_url('image/pages/') . $article['background'] ?>')">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 text-center mx-auto">
					<h1 class="heading text-white mb-2" data-aos="fade-up"><?= $article['title'] ?> - <?= $settings['title'] ?></h1>
				</div>

				
			</div>
		</div>
	</div>

	

	<div class="section bg-light">
		<div class="container">
			<div class="row">
				<?php foreach($data as $d) : ?>
				<div class="col-lg-4 col-md-6">
					<div class="causes-item bg-white">
						<a href="<?= base_url('a/') . $d['slug'] ?>"><img src="<?= base_url('uploads/') . $d['image'] ?>" alt="Image" class="img-fluid mb-4 rounded"></a>
						<div class="px-4 pb-3 pt-3">
							<span class="icon-calendar">&ensp;</span><span ><?= $d['created_at'] ?></span>
							<h3><a href="<?= base_url('a/') . $d['slug'] ?>"><?= $d['title'] ?></a></h3>
							<p> Mempersembahkan Hewan untuk Ketaatan dan Pengorbanan</p>
							<p><a href="<?= base_url('a/') . $d['slug'] ?>" class="d-flex align-items-center more2"><span>Baca selengkapnya</span> <span class="icon-chevron-right"></span></a></p>

							
						</div>
					</div>
				</div>
				<?php endforeach ?>
				
			</div>	

			<div class="row align-items-center py-5">
				<div class="col-lg-3">
					<!-- Pagination (1 of 10) -->
				</div>
				<div class="col-lg-6 text-center">
					<div class="d-flex custom-pagination justify-content-center">
						<?php if ($pager) : ?>
							<?php $pagi_path = 'article'; ?>
							<?php $pager->setPath($pagi_path); ?>
							<?= $pager->links('default') ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>		
	</div>
<?= $this->endSection(); ?>