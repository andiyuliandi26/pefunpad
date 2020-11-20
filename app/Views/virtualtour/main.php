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
					<div class="col-md-3 col-sm-4 col-mb-8">
						<div class="card bg-dark">
							<img src="/images/virtualtour/sponsor.png" class="img-fluid"/>
						</div>
						<!--<div class="embed-responsive embed-responsive-16by9">
							<video width="320" height="240" class="embed-responsive-item" autoplay loop autobuffer muted playsinline>
								<source src="/videos/bumper_sponsor.mp4" type="video/mp4">
								Your browser does not support the video tag.
							</video> 
						</div>-->
					</div>
				</div>
				<div class="row justify-content-center">
					
					<?php
						$index = 1;
						foreach($data as $items): 
											
						?>
							<div class="col-md-5 col-mb-10 my-3">
								<div class="iframe-container rounded-0">
									<?= generate_yt_iframe($items->videourl); ?>
								</div>
								<h3 class="h3 font-pef text-white mb-0 bg-dark py-2"><?= $items->namavideo;?></h3>
							</div>
						<?php 
							$index++;
						endforeach; ?>
				</div>
					
			</div>
		</div>
	</div>
</div>

<?php echo $this->endSection('content'); ?>