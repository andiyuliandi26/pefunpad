<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>
<style>
	@media (orientation: landscape) {
		.bg-roadshow {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: .97;
			background-image: url("/images/roadshow/background.jpg");
			background-repeat: repeat-y;
			background-size: cover;
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
		}
	}

	@media (orientation: portrait) {
		.bg-roadshow {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: .97;
			background-position: center;
			background-image: url("/images/roadshow/background-portrait.jpg");
			background-repeat: repeat-y;
			background-size: cover;
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
		}
	}
	
</style>

<div class="hero-wrap">
	<div class="bg-roadshow">
		<div class="container-page">
			<div class="row no-gutters justify-content-center mt-md-1 mt-4 main-event mb-5">
				<div class="col-md-8 col-sm-11 ftco-animate text-center">
					<h2 class="text-center page-title text-dark h3">Virtual Roadshow</h2>				
				</div>
				<div class="col-md-7 col-xl-6 col-sm-11 ftco-animate text-center mb-5">
					<div class="video-container">
						<div class="iframe-container">
							<?= generate_yt_iframe('-Nn07iwCXuw'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--<div class="container-bg">
	<img class="image-bg" src="/images/roadshow/background.jpg" />
	<img class="image-bg d-none d-sm-block d-md-none" src="/images/roadshow/background.jpg" />
	<div class="content-page">
		<div class="row no-gutters justify-content-center mt-md-1 mt-4 main-event">
			<div class="col-md-8 col-sm-11 ftco-animate text-center">
				<h2 class="text-center page-title text-dark h3">Virtual Roadshow</h2>				
			</div>
			<div class="col-md-7 col-xl-6 col-sm-11 ftco-animate text-center">
				<div class="video-container">
					<div class="iframe-container">
						<?= generate_yt_iframe('-Nn07iwCXuw'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>-->
<?php echo $this->endSection('content'); ?>