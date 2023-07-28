<?= $this->extend('layouts/wrapper'); ?>
<?= $this->section('content'); ?>
	<div class="hero overlay" style="background-image: url('<?= base_url('image/pages/') . $gallery['background'] ?>')">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 text-center">
					<h1 class="heading text-white mb-2" data-aos="fade-up"><?= $gallery['title'] ?> - <?= $settings['title'] ?></h1>		
					
				</div>	
			</div>
		</div>
	</div>

    <div class="gallery pb-0">

    <div class="image-container pb-0">

	<?php foreach($data as $d) : ?>
        <a href="<?= base_url('uploads/') . $d['image'] ?>" class="image">
            <img src="<?= base_url('uploads/') . $d['image'] ?>" alt="Image">
        </a>
	<?php endforeach ?>
    </div>
	<div class="row align-items-center py-5">
		<div class="col-lg-6 text-center">
			<div class="d-flex text-center custom-pagination justify-content-center">
				<?php if ($pager) : ?>
					<?php $pagi_path = 'gallery'; ?>
					<?php $pager->setPath($pagi_path); ?>
					<?= $pager->links() ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?= $this->endSection(); ?>