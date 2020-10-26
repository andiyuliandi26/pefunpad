
<style>
	.bg-virtualtour {
		position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/virtualtour/background.jpg");
        background-repeat: repeat-y;
        background-size: cover;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}
</style>
<div class="hero-wrap js-fullheight">
	<div class="bg-virtualtour">
		<div class="container-page">
			<div class="row no-gutters justify-content-center">
				<div class="col-md-12 ftco-animate text-center">
					<h2 class="h1 text-center page-title mt-3 text-dark">Virtual Tour</h2>
					<div class="row justify-content-center">
						<?php for($i = 0; $i < 18; $i++): ?>
							<div class="col-md-2 my-4">
								<img class="img-fluid" src="/images/bg-video.png" />
							</div>
						<?php endfor;?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
