<?= $this->extend('layouts/wrapper'); ?>
<?= $this->section('content'); ?>
	<div class="hero overlay" style="background-image: url('<?= base_url('image/pages/') . $mqatv['background'] ?>')">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 text-center mx-auto">
					<h1 class="heading text-white mb-2" data-aos="fade-up"><?= $mqatv['title'] ?> - <?= $settings['title'] ?></h1>		
				</div>
			</div>
		</div>
	</div>
    <div class="container">
	</br>
        <h1>MQA TV</h1>
        <div class="video-container">
        <?php foreach($data as $d) : ?>        
        <?php
            $url = $d['url_video'];

            // Mendapatkan ID video dari URL
            $videoId = '';
            $videoUrlParts = parse_url($url);
            if (isset($videoUrlParts['path'])) {
                $pathParts = explode('/', trim($videoUrlParts['path'], '/'));
                $videoId = end($pathParts);
            }
            $embedUrl = "https://www.youtube.com/embed/" . $videoId;
            $embedCode = '<iframe width="560" height="315" src="' . $embedUrl . '" frameborder="0" allowfullscreen></iframe>';
            ?>
        <iframe width="560" height="315" src="<?= $embedUrl ?>" frameborder="0" allowfullscreen></iframe>
        <?php endforeach ?>	
        </div>
    </div>
</br>
<div class="row align-items-center py-5">
	<div class="col-lg-3">
		<!-- Pagination (1 of 10) -->
	</div>
	<div class="col-lg-6 text-center">
		<div class="d-flex custom-pagination justify-content-center">
			<?php if ($pager) : ?>
				<?php $pagi_path = 'mqa-tv'; ?>
				<?php $pager->setPath($pagi_path); ?>
				<?= $pager->links('default') ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</br>
</br>
<?= $this->endSection(); ?>