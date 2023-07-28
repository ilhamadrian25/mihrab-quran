<?= $this->extend('layouts/wrapper'); ?>
<?= $this->section('content'); ?>
	<div class="hero overlay" style="background-image: url('<?= base_url('image/pages/') . $details_article['background'] ?>')">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 text-center mx-auto">
					<span class="subheading-white text-white mb-3" data-aos="fade-up"><?= $settings['title'] ?></span>

					<h1 class="heading text-white mb-2" data-aos="fade-up"><?= $details_article['title'] ?></h1>
				</div>

				
			</div>
		</div>
	</div>

    <div class="share-btn-container">
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url('c/') . $data['slug'] ?>" class="facebook-btn">
          <i class="fab fa-facebook"></i>
        </a>
  
        <a href="https://twitter.com/intent/tweet?url=<?= base_url('c/') . $data['slug'] ?>" class="twitter-btn">
          <i class="fab fa-twitter"></i>
        </a>
  
        <a href="https://www.instagram.com/share?url=<?= base_url('c/') . $data['slug'] ?>" class="instagram-btn">
          <i class="fab fa-instagram"></i>
        </a>
  
        <a href="https://www.linkedin.com/shareArticle?url=<?= base_url('c/') . $data['slug'] ?>" class="linkedin-btn">
          <i class="fab fa-linkedin"></i>
        </a>
  
        <a href="https://api.whatsapp.com/send?text=Halo,%20mari%20kita%20berbagi%20melalui%20WhatsApp!" class="whatsapp-btn">
          <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <div class="container" style=" max-width: 2000px;
    margin: 0 auto;
    padding: 20px;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;">
    
        <div class="main-content">
          <div class="article">
            <div class="mb-2">
                <h2 class="text-black">Amal Baik yang Diterima oleh Allah SWT: Niat dan Ketulusan Hati</h2>
                <p> 20 Juni 2023</p>
            </div>
            <div class="image-container">
                <div class="text-center">
                    <img src="<?= base_url('uploads/') . $data['image'] ?>" class="ig-fluid" alt="Gambar 1">
                </div>
            </div>
          </div>
          <div class="detail">
            <?= $data['content'] ?>
          </div>
        </div>
      </div>
    </div>
<?= $this->endSection(); ?>