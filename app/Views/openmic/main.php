<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>
<style>
	.bg-openmic {
		position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/openmic/background.jpg");
        background-repeat: repeat-y;
        background-size: cover;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}
</style>
<div class="container-bg">
	<img class="image-bg" src="/images/openmic/background.jpg" />
	<img class="image-bg d-none d-sm-block d-md-none" src="/images/openmic/background.jpg" />
	<div class="content-page">
		<div class="row no-gutters justify-content-center main-event mt-md-3 mt-sm-5">
			<div class="col-md-10 col-sm-12 ftco-animate text-center">
				<h2 class="h1 text-center page-title mt-3 text-dark">Open Mic with Alumni Unpad</h2>
				<div class="row justify-content-center mt-5">
					<div class="col-md-5">
						<!--<div class="video-container">

						</div>-->
						<div class="container-bg">
							<img class="image-bg" src="/images/commingsoon_poster.png" />
						</div>
					</div>

					<div class="col-md-5">
						<!--<div class="video-container">

						</div>-->
						<div class="container-bg">
							<img class="image-bg" src="/images/commingsoon_poster.png" />
						</div>
					</div>
				</div>
					
			</div>
		</div>
	</div>
</div>
<!--<div class="hero-wrap js-fullheight">
	<div class="bg-openmic">
		<div class="container-page">
			
		</div>
	</div>
</div>-->
<?php echo $this->endSection('content'); ?>