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
        background-size: cover;
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

	.container-page {
		width: 100%;
		height: 100%;
		margin-top:100px;
		margin-left: auto;
		padding: 20px;
		/*background-image: url("/images/roadshow/background.png");
		background-repeat: repeat-y;*/
	}
</style>
<!--<div class="hero-wrap js-fullheight">

	<div class="bg-roadshow">
		<div class="bg-nav"></div>
		<div class="container-page">
			<div class="row no-gutters align-items-center justify-content-center" data-scrollax-parent="true">
				<div class="col-md-12 ftco-animate text-center mt-5" data-scrollax=" properties: { translateY: '70%' }">
					<h2 class="h1 text-white">Virtual Roadshow</h2>
                    <div class="row" style="overflow-y:scroll">
						<?php
                            foreach($roadshow as $items){
								echo "<div class='col-lg-3 col-xl-3'>";
                                //echo "<iframe  height='175' src='{$items->videourl}' frameborder='0' allow='accelerometer; clipboard-write; encrypted-media; gyroscope;' allowfullscreen></iframe>";
                                echo "<iframe  height='175' src='/images/roadshow/background.png' frameborder='0' allow='accelerometer; clipboard-write; encrypted-media; gyroscope;' allowfullscreen></iframe>";
								echo "</div>";
							}
                        ?>
                        
                    </div>
					
				</div>
			</div>
		</div>
		<div class="bg-nav"></div>
	</div>
</div>-->

<div class="container-page js-fullheight">
	<!--<div class="bg-roadshow"></div>
	<div class="row">
		<div class="col">
			<h2 class="h1 text-white text-center">Virtual Roadshow</h2>
			<div class="card m-5 bg-transparent">
				<div class="card-body">
					<div class="row no-gutters align-items-center justify-content-center" data-scrollax-parent="true">
						<div class="col-md-12 ftco-animate text-center mt-5" data-scrollax=" properties: { translateY: '70%' }">

						<?php
								foreach($roadshow as $items){
									echo "<div class='embed-responsive embed-responsive-16by9'>";
									//echo "<iframe  height='175' src='{$items->videourl}' frameborder='0' allow='accelerometer; clipboard-write; encrypted-media; gyroscope;' allowfullscreen></iframe>";
									echo "<iframe class='embed-responsive-item' src='/images/roadshow/background.png' frameborder='0' allow='accelerometer; clipboard-write; encrypted-media; gyroscope;' allowfullscreen></iframe>";

									echo "</div>";
								}
                        ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<div class="bg-roadshow">
		<h2 class="h1 text-white text-center">Virtual Roadshow</h2>
		<div class="row no-gutters justify-content-center">
			<div class="col-md-8">
				<div class="card bg-tranparent">
					<dvi class="card-body">
						<div class="row">
							<?php
						$index = 1;
						foreach($roadshow as $items): ?>
							<div class="col-lg-3 col-md-4 mb-4">

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