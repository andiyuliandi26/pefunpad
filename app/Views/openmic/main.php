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

	.burung1 {
		max-height:100px;
		max-width: 100px;
		position: absolute;
		top: 30px;
		z-index:10001;
		/*animation-name: example;
		animation-duration: 1s;*/
		animation: 5s linear 0s slide infinite;
	}

	@keyframes slide {
	  from { left: 0; }
	  to {
		left: 30%;
		transform: translateX(-50%);
	  }
	}


</style>
	  <link href="<?php echo base_url(); ?>/css/animation.css" rel="stylesheet" type="text/css"/>

<div class="container-bg">
	<img class="image-bg" src="/images/openmic/background.jpg" />
	<img class="image-bg d-none d-sm-block d-md-none" src="/images/openmic/background.jpg" />
	<div class="content-page">
		<div class="row no-gutters justify-content-center main-event mt-md-3 mt-sm-5">
			<div class="col-md-12">
				<!--<div class="particle elem1 anim-delay1">
					<img src="/animasi/burung_1.gif" class="img-fluid"/>
				</div>-->
				<!--<div class="particle elem2 anim-delay2">
					<img src="/animasi/burung_2.gif" class="img-fluid" />
				</div>
				<div class="particle elem3 anim-delay3">
					<img src="/animasi/burung_3.gif" class="img-fluid" />
				</div>
				<div class="particle elem4 anim-delay4">
					<img src="/animasi/burung_4.gif" class="img-fluid" />
				</div>
				<div class="particle elem5 anim-delay5">
					<img src="/animasi/burung_5.gif" class="img-fluid" />
				</div>-->
				<!--<div class="particle elem6 anim-delay6">
					<img src="/animasi/burung_6.gif" class="img-fluid" />
				</div>-->
			</div>
			<div class="col-md-12 col-sm-12 ftco-animate text-center">
				<h2 class="h1 text-center page-title mt-3 text-dark">Spektrum Alumni Unpad</h2>
				<div class="row justify-content-center mt-5">
					<div class="col-md-5">
						<div class="video-container">
							<div class="iframe-container">
								<?= generate_yt_iframe('pudgVX-KN5g'); ?>
							</div>
						</div>
						<!--<div class="container-bg">
							<img class="image-bg" src="/images/commingsoon_poster.png" />
						</div>-->
					</div>

					<div class="col-md-5">
						<div class="video-container">
							<div class="iframe-container">
								<?= generate_yt_iframe('i3OIXOOkeTw'); ?>
							</div>
						</div>
						<!--<div class="container-bg">
							<img class="image-bg" src="/images/commingsoon_poster.png" />
						</div>-->
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