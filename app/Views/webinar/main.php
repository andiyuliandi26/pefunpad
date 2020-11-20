<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>
<style>

	@media (orientation: landscape) {
		.bg-webinar {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			background-image: url("/images/virtualtour/background-full.jpg");
			background-repeat: repeat-y;
			background-size: 100%;
		}
	}

	@media (orientation: portrait) {
		.bg-webinar {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			/*background-position: center;*/
			background-image: url("/images/virtualtour/background-full.jpg");
			background-repeat: repeat-y;
			background-size: 100%;
		}
	}

	/*.bg-webinar {
		position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/webinar/background.jpg");
        background-repeat: repeat-y;
        background-size: 100%;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}*/
</style>

<div class="bg-webinar">		 
	<div class="container-page">
		<div class="row no-gutters justify-content-center pt-md-5">
			<div class="col-md-12 ftco-animate text-center">
				<h2 class="h1 text-center page-title mt-3 text-dark">Webinar 1</h2>
				<div class="row justify-content-center">
					<div class="col-lg-7 col-md-8 col-sm-12 mb-5">
						<div class="video-container">
							<div class="iframe-container">
								<?= generate_yt_iframe('XBKiMt6zAM0'); ?>
							</div>
						</div>
					</div>
				</div>
				<h2 class="h1 text-center page-title mt-5 text-dark">Webinar 2</h2>
				<div class="row justify-content-center">
					<div class="col-lg-7 col-md-8 col-sm-12 mb-4">
						<div class="video-container">
							<div class="iframe-container">
								<?= generate_yt_iframe('XBKiMt6zAM0'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $this->endSection('content'); ?>