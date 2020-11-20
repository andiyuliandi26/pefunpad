<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>
<style>
	@media (orientation: landscape) {
		.bg-virtualtour {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			background-image: url("/images/virtualtour/background.jpg");
			background-repeat: repeat-y;
			background-size: 100%;
		}
	}

	@media (orientation: portrait) {
		.bg-virtualtour {
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
	
</style>

<div class="bg-virtualtour">
	<div class="container-page">
		<div class="row no-gutters justify-content-center pt-md-5">
			<div class="col-md-12 ftco-animate text-center">
				<h2 class="h1 text-center page-title mt-3 text-dark">Virtual Tour</h2>
				<div class="row justify-content-center">
					<?php
						$index = 1;
						foreach($data as $items): 
											
						?>
							<div class="col-md-4 col-mb-6 my-3">
								<div class="iframe-container rounded-0">
									<?= generate_yt_iframe($items->videourl); ?>
								</div>
								<p class="page-title font-pef text-white mb-0 bg-dark py-2"><?= $items->namavideo;?></p>
							</div>
						<?php 
							$index++;
						endforeach; ?>
				</div>
					
			</div>
		</div>
	</div>
</div>
<!--<div class="container-bg d-none d-md-block d-sm-block d-lg-none">
	<img class="image-bg" src="/images/virtualtour/background.jpg" />
	<img class="image-bg" src="/images/virtualtour/background.jpg" />
	<div class="content-page">
		<div class="row no-gutters justify-content-center mt-md-5 mt-4 main-event"><div class="col-md-12 ftco-animate text-center">
					<h2 class="h1 text-center page-title mt-3 text-dark">Virtual Tour</h2>
					<div class="row justify-content-center px-2">
						<?php for($i = 0; $i < 18; $i++): ?>
							<div class="col-md-2 col-sm-3 my-2">
								<img class="img-fluid" src="/images/bg-video.png" />
							</div>
						<?php endfor;?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>-->
<?php echo $this->endSection('content'); ?>