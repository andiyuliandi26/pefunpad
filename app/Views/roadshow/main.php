<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>
<style>
	.bg-roadshow {
		position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/roadshow/background.jpg");
        background-repeat: repeat-y;
        background-size: 100% 100%;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}

	.bg-nav {
		position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-color: #0000002b;
        background-repeat: no-repeat;
		height:120px;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}
</style>

<!--<div class="hero-wrap js-fullheight">
	<div class="bg-roadshow">
		<div class="container-page">
			
		</div>
	</div>
</div>-->

<div class="container-bg">
	<img class="image-bg" src="/images/roadshow/background.jpg" />
	<img class="image-bg d-none d-sm-block d-md-none" src="/images/roadshow/background.jpg" />
	<div class="content-page">
		<div class="row no-gutters justify-content-center mt-md-35 mt-4 main-event">
				<div class="col-md-8 col-sm-11 ftco-animate text-center">
					<h2 class="h1 text-center page-title text-dark">Virtual Roadshow</h2>

					<div class="card bg-dark">
						<div class="card-body">
							<div class="row justify-content-center">
								<div class="col-md-10 col-sm-11 my-md-3 mb-sm-4 mt-sm-3">
									<div class="iframe-container">
											<?= generate_yt_iframe('-Nn07iwCXuw'); ?>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>
<?php echo $this->endSection('content'); ?>