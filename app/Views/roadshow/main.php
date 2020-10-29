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
<div class="hero-wrap js-fullheight">
	<div class="bg-roadshow">
		<div class="container-page">
			<div class="row no-gutters justify-content-center">
				<div class="col-md-8 ftco-animate text-center">
					<h2 class="h1 text-center page-title text-dark">Virtual Roadshow</h2>

					<div class="card bg-dark">
						<dvi class="card-body">
							<div class="row">
								<?php
								$index = 1;
								foreach($roadshow as $items): ?>
									<div class="col-lg-2 col-md-2 mb-4">

										<!--Modal: Name-->
										<div class="modal fade" id="modal<?php echo $index; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg" role="document">

												<!--Content-->
												<div class="modal-content">

													<!--Body-->
													<div class="modal-body mb-0 p-0">

														<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
															<!--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
														allowfullscreen></iframe>-->
														</div>

													</div>

												</div>
												<!--/.Content-->

											</div>
										</div>
										<!--Modal: Name-->

										<a style="cursor:pointer">
											<img class="img-fluid z-depth-1" src="/images/bg-video.png" alt="video"
												data-toggle="modal" data-target="#modal<?php echo $index; ?>" />
										</a>

									</div>
								<?php
						$index++;
					endforeach; ?>
							</div>
						</dvi>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
