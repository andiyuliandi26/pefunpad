<style>
	.video-size {
		width: 750px;
		height: 100%;
	}

	.video-frame {
		width: 100%;
		position: absolute;
		background-image: url("/images/bg-video.png");
		background-repeat: no-repeat;
		background-size: 100% 100%;
	}

	.iframe-container {
			width: 100%;
			position: relative;
			overflow: hidden;
			
			background-repeat: no-repeat;
			background-size: 100% 100%;
			padding-top: 56.25%;
			border-radius: 20px;
			margin-top:10px;
	}

	.responsive-iframe {
		position:absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		width: 100%;
		height: 100%;
	}

	.maskot-container {
		padding-top:0px;
	}

	.pef-description {
		font-size:14px;
		line-height:1.5;
	}

	.logo-pef {
		cursor:pointer;
	}

	.logodetail {
		/*display:block;*/
		opacity:0;
		backface-visibility: visible;
		transition: .5s ease-in-out;
	}

	.logodetail.logo-shows {
		opacity:1;
	}
</style>
<!-- <div class="js-fullheight"> -->
<div class="hero-wrap js-fullheight">
	<div class="overlay1">
		<!--<div id="particles-js"></div>-->
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center main-event" data-aos="fade-down">
				<div class="col-md-8 text-center mt-5">
					<h3 class="text-white page-title"> 21 - 22 November 2020 </h3>
					<div id="flipdown" class="flipdown m-auto"></div>

					<div class="row mt-3 justify-content-center align-items-center">
						<div class="col-sm-9">
							<div class="video-container">
								<a href="/mainevent">
									<img class="img-fluid rounded" src="/images/homepage/mainevent.png" />
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="overlay2">
	<div class="row no-gutters pt-2">
		<div class="col-md-12">
			<div  class="row no-gutters mt-5 pt-5 justify-content-center text-center">
				<div class="col-md-4 pt-3">
					<div class="row mb-2 logodetail">
						<div class="col-md-3">
							<img src="/images/homepage/burung.png" class="img-fluid" />
						</div>
						<div class="col-md-9 text-left">
							<h4>Burung</h4>
							<p class="pef-description">
								Burung adalah lambang dari kolaborasi yang merupakan nilai utama di PEF 2020. 8 helai bulu pada sayap burung melambangkan PEF 2020 merupakan PEF ke-8 yang telah diadakan sejak tahun 2013
							</p>
						</div>
					</div>
					<div class="row logodetail">
						<div class="col-md-3">
							<img src="/images/homepage/kujang.png" class="img-fluid" />
						</div>
						<div class="col-md-9 text-left">
							<h4>Kujang</h4>
							<p class="pef-description">
								Kujang adalah senjata tradisional dari Jawa Barat tempat dimana Universitas Padjadjadran berdiri. Kujang merefleksikan keberanian, kekuatan, ketajaman, dan daya kritis
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-2 px-5 mx-5 text-center">
					<img class="img-fluid" src="/images/logopef.png" data-aos="fade-down" style="cursor:pointer;" onclick="showlogo();" id="peflogobtn"/>
					<h6 style="font-size:0.93rem; margin-top:1rem;" data-aos="fade-in">in collaboration with</h6>
					<img class="img-fluid mt-3" src="/images/logoohu.png" data-aos="fade-up" />
				</div>
				<div class="col-md-4 pt-3">
					<div class="row mb-2 logodetail">
						<div class="col-md-9 text-right">
							<h4>Jambul</h4>
							<p class="pef-description">
								Tiga jambul pada kepala burung adalah lambang dari Tri Dharma Perguruan Tinggi yang merupakan salah satu tujuan yang harus dicapai dan dilakukan oleh setiap perguruan tinggi di Indonesia. Isis dari Tri Dharma tersebut adalah Pendidikan dan Pengajaran, Penelitian dan Pengembangan, dan Pengabdian kepada Masyarakat.
							</p>
						</div>
						<div class="col-md-3">
							<img src="/images/homepage/jambul.png" class="img-fluid" />
						</div>
					</div>
					<div class="row logodetail">
						<div class="col-md-9 text-right">
							<h4>Warna</h4>
							<p class="pef-description">
								Warna pada burung yang menyerupai api adalah lambang dari persaan semangat yang akan selalu menggelora dan terus dikobarkan selama proses hingga acara PEF 2020 berlangsung.
							</p>
						</div>
						<div class="col-md-3">
							<img src="/images/homepage/warna.png" class="img-fluid" />
						</div>
					</div>
				</div>
			</div>
			<div class="row no-gutters mt-5 pt-4 justify-content-center text-center" data-aos="fade-in">
				<div class="col-sm-8">
					<!--<img class="img-fluid" src="/images/pef-ohu.png" />-->
					<h1 class="font-pef text-danger mb-1 display-2">PEF x OHU 2020</h1>
					<h1 class="font-pef text-danger">Wings of Collaboration</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="overlay2">
	<div class="row no-gutters pt-5">
		<div class="col-md-12">
			<div class="row no-gutters mt-5 pt-5 justify-content-center text-center">
				<div class="col-md-4 pt-3">
					<div class="row mb-2" data-aos="fade-right">
						<div class="col-md-3">
							<img src="/images/homepage/burung.png" class="img-fluid" />
						</div>
						<div class="col-md-9 text-left">
							<h4>Burung</h4>
							<p class="pef-description">
								Burung adalah lambang dari kolaborasi yang merupakan nilai utama di PEF 2020. 8 helai bulu pada sayap burung melambangkan PEF 2020 merupakan PEF ke-8 yang telah diadakan sejak tahun 2013
							</p>
						</div>
					</div>
					<div class="row" data-aos="fade-right">
						<div class="col-md-3">
							<img src="/images/homepage/kujang.png" class="img-fluid" />
						</div>
						<div class="col-md-9 text-left">
							<h4>Kujang</h4>
							<p class="pef-description">
								Kujang adalah senjata tradisional dari Jawa Barat tempat dimana Universitas Padjadjadran berdiri. Kujang merefleksikan keberanian, kekuatan, ketajaman, dan daya kritis
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-2 px-5 mx-5 text-center">
					<img class="img-fluid" src="/images/logopef.png" data-aos="fade-down" />
					<h6 style="font-size:0.93rem; margin-top:1rem;" data-aos="fade-in">in collaboration with</h6>
					<img class="img-fluid mt-3" src="/images/logoohu.png" data-aos="fade-up" />
				</div>
				<div class="col-md-4 pt-3" data-aos="fade-left">
					<div class="row mb-2">
						<div class="col-md-3">
							<img src="/images/homepage/jambul.png" class="img-fluid" />
						</div>
						<div class="col-md-9 text-left">
							<h4>Jambul</h4>
							<p class="pef-description">
								Tiga jambul pada kepala burung adalah lambang dari Tri Dharma Perguruan Tinggi yang merupakan salah satu tujuan yang harus dicapai dan dilakukan oleh setiap perguruan tinggi di Indonesia. Isis dari Tri Dharma tersebut adalah Pendidikan dan Pengajaran, Penelitian dan Pengembangan, dan Pengabdian kepada Masyarakat.
							</p>
						</div>
					</div>
					<div class="row" data-aos="fade-left">
						<div class="col-md-3">
							<img src="/images/homepage/warna.png" class="img-fluid" />
						</div>
						<div class="col-md-9 text-left">
							<h4>Warna</h4>
							<p class="pef-description">
								Warna pada burung yang menyerupai api adalah lambang dari persaan semangat yang akan selalu menggelora dan terus dikobarkan selama proses hingga acara PEF 2020 berlangsung.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row no-gutters mt-5 pt-4 justify-content-center text-center" data-aos="fade-in">
				<div class="col-sm-8">
					<!--<img class="img-fluid" src="/images/pef-ohu.png" />-->
					<h1 class="font-pef text-danger mb-1 display-2">PEF x OHU 2020</h1>
					<h1 class="font-pef text-danger">Wings of Collaboration</h1>
				</div>
			</div>
		</div>
	</div>
	

</div>

<div class="overlay3">
	<div class="row no-gutters pt-5">
		<div class="col-md-12">
			<div class="row no-gutters my-5 justify-content-center" data-aos="fade-down">
				<div class="col-md-6 text-center">
					<h1 class="mb-4 font-pef text-danger display-4">Maskot PEF 2020</h1>
				</div>
			</div>
			<div class="row no-gutters justify-content-center ">
				<div class="col-md-8">
					<div class="row justify-content-center">
						<div class="col-md-4 text-center mx-5" data-aos="fade-right">
							<img class="img-fluid" src="/images/maskot-siro.png" />
						</div>
						<div class="col-md-4 text-center mx-5" data-aos="fade-left">
							<img class="img-fluid" src="/images/maskot-vivi.png" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="overlay4">
	<div class="row no-gutters justify-content-center">
		<div class="col-md-8 text-center" data-aos="fade-down">
			<h1 class="mb-4 font-pef text-danger display-4">Rangkaian PEF x OHU 2020</h1>
		</div>
	</div>
	<div class="row no-gutters justify-content-center">
		<div class="col-md-11">
			<div class="row no-gutters justify-content-center px-5">
				<?php
				foreach($rangkaianacara as $items):
                ?>
					<div class="col-md-3 p-3">
						<div class="text-container py-5 text-center" data-aos="zoom-in">
							<p class="font-pef text-danger h4 my-auto">
								<?php echo $items->namaacara; ?>
							</p>
						</div>
					</div>

				<?php
				endforeach;
                ?>
			</div>
		</div>
	</div>
	
</div>

<div class="overlay5">
	<div class="row no-gutters justify-content-center pt-5">
		<div class="col-md-6 text-center" data-aos="fade-down">
			<h2 class="mb-4 font-pef display-4 text-success">Throwback</h2>
		</div>
	</div>
	<div class="row no-gutters mt-2 justify-content-center" data-aos="zoom-in-up">
		<div class="col-sm-6">
			<div class="video-container">
				<div class="iframe-container">
				<!--<iframe class="responsive-iframe"  src="https://www.youtube.com/embed/BUM8SeH3gCI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
					<!--<iframe class="responsive-iframe" src="https://www.youtube.com/embed/LpUB2RnHeWg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;"></iframe>-->
				</div>
			</div>
		</div>
	</div>
</div>

<div class="overlay6">
	<div class="row no-gutters justify-content-center">
		<div class="col-md-8">
			<div class="row no-gutters justify-content-center pt-5">
				<div class="col-md-6 text-center" data-aos="fade-down">
					<h2 class="mb-4 font-pef display-4 text-success">Merchandise</h2>
				</div>
			</div>
			<div class="row no-gutters mb-5 py-5 justify-content-center">
				<?php
				foreach($merchandise as $items):
				?>
					<div class="col-md-4 col-lg-4 text-center" data-aos="zoom-in">
						<a href="/merchandise">
							<img src="/images/merchandise/<?php echo $items->imageurl; ?>" alt="<?php echo $items->namaproduk; ?>" class="img-fluid" />
						</a>
					</div>

				<?php
					endforeach;
				?>

			</div>
		</div>
	</div>
	
</div>

<div class="modal fade" id="welcomeModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center pb-5">
				<img src="/images/homepage/welcome_message.jpg" />
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		//$('#welcomeModal').modal('show');
		//var datetime = (new Date().getTime() / 1000) + (86400 * 2) + 1;
		var datetime = (Date.parse('<?php echo $event->tanggalevent; ?>') / 1000);
		var flipdown = new FlipDown(datetime);
		flipdown.start();
	});

	function showlogo() {
		//if (!$('.logodetail').hasClass('logo-show')) {
			//$('.logodetail').removeClass('logo-hide');
			//$('.logodetail').addClass('logo-show');
			$('.logodetail').addClass('logo-shows');
			$('.logodetail2').addClass('logo-shows');
			$('.logodetail3').addClass('logo-shows');
			$('.logodetail4').addClass('logo-shows');
		//} else {
		//	//$('.logodetail').addClass('logo-hide');
		//	$('.logodetail').removeClass('logo-show');
		//}

		//if (!$('.logodetail2').hasClass('logo-show2')) {
			//$('.logodetail').removeClass('logo-hide');
			//$('.logodetail2').addClass('logo-show2');
		//} else {
		//	//$('.logodetail').addClass('logo-hide');
		//	$('.logodetail2').removeClass('logo-show2');
		//}

		
	}
</script>