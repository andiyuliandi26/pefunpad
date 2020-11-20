<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>
<style>
	@media (orientation: landscape) {
		.bg-fakultas {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			background-image: url("/images/fakultas/background-full.png");
			background-repeat: repeat-y;
			background-size: 100%;
		}
	}

	@media (orientation: portrait) {
		.bg-fakultas {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			/*background-position: center;*/
			background-image: url("/images/fakultas/background-portrait.jpg");
			background-repeat: repeat-y;
			background-size: 100%;
		}
	}


		.bg-fakultas .img-fluid {
			border-radius:10px;
		}

</style>

<div class="bg-fakultas">
	<div class="container-page">
		<div class="row no-gutters justify-content-center pt-md-5 mt-3 mb-4 main-event">
			<div class="col-md-12 col-sm-11 ftco-animate text-center">
				<h2 class="h1 text-center page-title text-danger mb-sm-0" data-aos="fade-down"><?= $fakultas->nama ?></h2>
				<div class="row no-gutters justify-content-center px-sm-2">

				</div>
			</div>
			<div class="col-md-6 col-sm-8 my-md-3 mb-sm-4 mt-sm-3">
				<div class="video-container">
					<div class="iframe-container">
					<iframe class="responsive-iframe"  src="<?= $fakultas->videourl; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-sm-11">
				<div class="text-container">
					<div class="card-body">									
						<p class="text-justify">
							<?= $fakultas->deskripsi; ?>								
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php echo $this->endSection('content'); ?>