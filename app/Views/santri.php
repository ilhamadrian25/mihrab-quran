<?= $this->extend('layouts/wrapper'); ?>
<?= $this->section('content'); ?>
	<div class="hero overlay" style="background-image: url('<?= base_url('image/pages/') . $santri['background'] ?>')">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 text-center">
					<h1 class="heading text-white mb-2" data-aos="fade-up"><?= $santri['title'] ?> - <?= $settings['title'] ?></h1>	
				</div>
			</div>
		</div>
	</div>

    <main class="table">
        <section class="table_header">
            <h1>Data Santri</h1>
        </section>
        <section class="table_body">
            <table>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Umur</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php $no = 1; foreach($data as $d) : ?>
                    <tr>
                    <td> <?= $no++ ?> </td>
                    <td> <?= $d['name'] ?> </td>
                    <td> <?= date('d F Y', strtotime($d['dob'])) ?> </td>
                    <?php
                        $tanggalLahir = date("Y-m-d", strtotime($d['dob']));
                        $tanggalSekarang = date("Y-m-d");
                        $umur = date_diff(date_create($tanggalLahir), date_create($tanggalSekarang))->y;
                    ?>
                    <td> <?= $umur ?> </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </section>
    </main>
    <?= $this->endSection(); ?>