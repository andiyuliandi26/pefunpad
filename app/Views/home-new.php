<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>

<style>
	@media screen and (max-width: 575px) {
		.bg-homepage {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			background-image: url("/images/homepage/bg/background-portrait-full.png");
			/*background-position: center;*/
			background-repeat: repeat-y;
			background-size: 100% auto;
		}

		.img-small {
			max-width:300px;
			max-height:300px;
		}

		.img-logo-small {
			max-width:75px;
			max-height:75px;
		}

		.col-mb-1 {
			position:relative;
			width: 8%;
		}

		.col-mb-2 {
			position:relative;
			width: 15%;
		}

		.col-mb-3 {
			position:relative;
			width: 23.75%;
		}

		.col-mb-4 {
			position:relative;
			width: 31.6%;
		}

		.col-mb-5 {
			position:relative;
			width: 40%;
		}

		.col-mb-6 {
			position:relative;
			width: 45%;
		}

		.col-mb-7 {
			position:relative;
			width: 56%;
		}

		.col-mb-8 {
			position:relative;
			width: 64%;
		}

		.col-mb-9 {
			position:relative;
			width: 72%;
		}

		.col-mb-10 {
			position:relative;
			width: 80%;
		}

		.col-mb-11 {
			position:relative;
			width: 88%;
		}

		.col-mb-12 {
			position:relative;
			width: 95%;
		}

		.space-between-section {
			margin-bottom:50px;
			padding-bottom:50px;
		}

		.top-section {
			padding-top:50px !important;
			padding-bottom:100px !important;
		}
	}

	@media (min-width: 576px) {
		.bg-homepage {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			background-image: url("/images/homepage/bg/background-full.png");
			/*background-position: center;*/
			background-repeat: repeat-y;
			background-size: 100% auto;
		}
	}

	
</style>

<div class="bg-homepage">
		<div class="container-page">

			<div class="row no-gutters justify-content-center mt-lg-1 mt-md-4 mt-xs-3 mt-2 mb-lg-5 main-event mb-5 space-between-section top-section" data-aos="fade-down">
				<div class="col-md-8 col-sm-6 text-center">
					<h3 class="text-dark page-title"> <?= $event->eventdatetitle; ?> </h3>
					<div id="countdown" class="countdownHolder"></div>
				</div>
				<div class="col-md-7 col-lg-8 col-sm-8 col-xs-6 ftco-animate text-center mb-2">
					<div class="video-container">
						<img class="img-fluid" src="/images/mainevent/<?= $event->posterurl; ?>" />
					</div>
				</div>
			</div>

			<div class="d-none d-lg-block">
				<div  class="row no-gutters mt-lg-5 mb-lg-5 mt-md-5 mt-1 pt-lg-5 justify-content-center text-center">
					<div class="col-md-4 pt-3">
						<div class="row mb-2 logodetail">
							<div class="col-md-3">
								<img src="/images/homepage/burung.png" class="img-fluid" />
							</div>
							<div class="col-md-9 text-left">
								<h4>Burung</h4>
								<p class="logo-description">
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
								<p class="logo-description">
									Kujang adalah senjata tradisional dari Jawa Barat tempat dimana Universitas Padjadjadran berdiri. Kujang merefleksikan keberanian, kekuatan, ketajaman, dan daya kritis
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-2 px-4 mx-5 text-center">
						<img class="img-fluid" src="/images/logopef.png" data-aos="fade-down" style="cursor:pointer;" onclick="showlogo();" id="peflogobtn"/>
						<h6 style="font-size:0.93rem; margin-top:1rem;" data-aos="fade-in">in collaboration with</h6>
						<img class="img-fluid mt-3" src="/images/logoohu.png" data-aos="fade-up" />
					</div>
					<div class="col-md-4 pt-3">
						<div class="row mb-2 logodetail">
							<div class="col-md-9 text-right">
								<h4>Jambul</h4>
								<p class="logo-description">
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
								<p class="logo-description">
									Warna pada burung yang menyerupai api adalah lambang dari persaan semangat yang akan selalu menggelora dan terus dikobarkan selama proses hingga acara PEF 2020 berlangsung.
								</p>
							</div>
							<div class="col-md-3">
								<img src="/images/homepage/warna.png" class="img-fluid" />
							</div>
						</div>
					</div>
				</div>

				<div class="row no-gutters mt-lg-5 mb-lg-5 pt-lg-5 pb-lg-5 justify-content-center text-center" data-aos="fade-in">
				<div class="col-sm-8">
					<!--<img class="img-fluid" src="/images/pef-ohu.png" />-->
					<h1 class="font-pef text-danger mb-1 display-4">PEF x OHU 2020</h1>
					<h3 class="font-pef text-danger">Wings of Collaboration</h3>
				</div>
			</div>
			</div>

			<div class="d-block d-lg-none">
				<div class="row no-gutters mt-md-1 mt-2 mb-2 space-between-section">
					<div class="col-md-3 col-sm-3 col-xs-3 px-sm-2 mr-sm-0 text-center">
						<div class="row no-gutters justify-content-center">
							<div class="col-sm-8">						
								<img class="img-fluid img-small" src="/images/logopef.png" style="cursor:pointer;" onclick="showlogo();" id="peflogobtn" data-aos="fade-up" />
							</div>
							<div class="col-sm-8">
								<p class="logo-title" data-aos="fade-in">in collaboration with</p></div>
							<div class="col-sm-8">
								<img class="img-fluid mt-3 img-small" src="/images/logoohu.png" data-aos="fade-up" />
							</div>
						</div>
					</div>
					<div class="col-md-9 col-sm-9">
						<div class="row no-gutters">
							<div class="col-md-2 col-sm-2 col-xs-2 pr-sm-0 col-mb-2">
								<img src="/images/homepage/burung.png" class="img-fluid" />
							</div>
							<div class="col-md-9 col-sm-10 text-left">
								<h4 class="logo-title">Burung</h4>
								<p class="logo-description">
									Burung adalah lambang dari kolaborasi yang merupakan nilai utama di PEF 2020. 8 helai bulu pada sayap burung melambangkan PEF 2020 merupakan PEF ke-8 yang telah diadakan sejak tahun 2013
								</p>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-md-2 col-sm-2 col-xs-2 pr-sm-0 col-mb-2">
								<img src="/images/homepage/kujang.png" class="img-fluid" />
							</div>
							<div class="col-md-9 col-sm-10 text-left">
								<h4 class="logo-title">Kujang</h4>
								<p class="logo-description">
									Kujang adalah senjata tradisional dari Jawa Barat tempat dimana Universitas Padjadjadran berdiri. Kujang merefleksikan keberanian, kekuatan, ketajaman, dan daya kritis
								</p>
							</div>
						</div>
						<div class="row no-gutters">					
							<div class="col-md-2 col-sm-2 pr-sm-0 col-mb-2">
								<img src="/images/homepage/jambul.png" class="img-fluid" />
							</div>
							<div class="col-md-9 col-sm-10 text-left">
								<h4 class="logo-title">Jambul</h4>
								<p class="logo-description">
									Tiga jambul pada kepala burung adalah lambang dari Tri Dharma Perguruan Tinggi yang merupakan salah satu tujuan yang harus dicapai dan dilakukan oleh setiap perguruan tinggi di Indonesia. Isis dari Tri Dharma tersebut adalah Pendidikan dan Pengajaran, Penelitian dan Pengembangan, dan Pengabdian kepada Masyarakat.
								</p>
							</div>
						</div>
						<div class="row no-gutters">					
							<div class="col-md-2  col-sm-2 pr-sm-0 col-mb-2">
								<img src="/images/homepage/warna.png" class="img-fluid" />
							</div>
							<div class="col-md-9 col-sm-10 text-left">
								<h4 class="logo-title">Warna</h4>
								<p class="logo-description">
									Warna pada burung yang menyerupai api adalah lambang dari persaan semangat yang akan selalu menggelora dan terus dikobarkan selama proses hingga acara PEF 2020 berlangsung.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Maskot PEF Section-->
			<div class="row no-gutters mt-lg-5 mb-lg-5 mt-md-4 mt-sm-4 pt-lg-5 pb-lg-5 justify-content-center space-between-section">
				<div class="col-md-12 text-center" data-aos="fade-down">
					<p class="mb-2 font-pef text-danger page-title">Maskot PEF 2020</p>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-3 text-center mx-2 col-mb-6" data-aos="fade-right">
					<!--<img class="img-fluid" src="/images/maskot-siro.png" />-->
					<img class="img-fluid" src="/animasi/siro-v2_old.gif" />				
					<h4 class="font-pef">Siro</h4>

				</div>
				<div class="col-lg-3 col-md-4 col-sm-3 text-center mx-2 col-mb-6" data-aos="fade-left">
					<!--<img class="img-fluid" src="/images/maskot-vivi.png" />-->
					<img class="img-fluid" src="/animasi/vivi-v2_old.gif" />
					<h4 class="font-pef">Vivi</h4>
				</div>
				<div class="col-lg-5 col-md-10 pt-3 text-left" data-aos="zoom-in">
					<div class="text-justify">
						<h4 class="font-pef logo-title">Awan</h4>
						<p class="logo-description">Representasi para individu dibalik PEF X OHU 2020 yang siap untuk menemani peserta menelusuri langit Padjadjaran tempat mereka bernaung</p>
					</div>
					<div class="text-justify">
						<h4 class="font-pef logo-title">Siro dan Vivi</h4>
						<p class="logo-description"><strong>Siro</strong> diambil dari nama salah satu jenis awan tinggi yaitu "Cirrocumulus" dan <strong>Vivi</strong> diambil dari kata "vivid" yang berarti cerah</p>
					</div>
					<div class="text-justify">
						<h4 class="font-pef logo-title">Rompi</h4>
						<p class="logo-description">Dikenakan Siro dan Vivi dihiasi motif bunga khas Jawa Barat</p>
					</div>
				</div>
			</div>
			<!--Maskot PEF Section-->

			<!--Rangkaian Acara Section-->
			<div class="row no-gutters mt-lg-5 mt-md-4 mt-sm-4 pt-lg-5 pb-lg-3 justify-content-center space-between-section">
				<div class="col-md-12 text-center" data-aos="zoom-in">
					<p class="mb-2 font-pef text-danger page-title">Rangkaian PEF x OHU 2020</p>
				</div>
				<?php
				foreach($rangkaianacara as $items):
				?>
					<div class="col-lg-3 col-md-4 col-sm-4 p-3 col-mb-6">
						<div class="text-container py-sm-1 py-md-4 text-center" data-aos="zoom-in">
							<p class="font-pef text-danger rangkaian-acara my-xl-3">
								<?php echo $items->namaacara; ?>
								<a class="stretched-link" href="<?= base_url().$items->hyperlink;?>"></a>
							</p>
						</div>
					</div>

				<?php
				endforeach;
				?>
			</div>
			<!--Rangkaian Acara Section-->

			<!--Throwback Section-->
			<div class="row no-gutters mt-lg-5 mb-lg-5 mt-md-4 mt-sm-4 pt-lg-5 pb-lg-5 justify-content-center space-between-section">
				<div class="col-md-12 mb-lg-3 text-center" data-aos="fade-down">
					<h2 class="mb-3 font-pef text-success page-title">Throwback</h2>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-7" data-aos="zoom-in-up">
					<div class="video-container">
						<div class="iframe-container">
							<?= generate_yt_iframe("LpUB2RnHeWg"); ?>
						<!--<iframe class="responsive-iframe"  src="https://www.youtube.com/embed/BUM8SeH3gCI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
							<!--<iframe class="responsive-iframe" src="https://www.youtube.com/embed/LpUB2RnHeWg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;"></iframe>-->
						</div>
					</div>
				</div>
			</div>
			<!--Throwback Section-->
			
			<!--Mechandise Section-->
			<div class="row no-gutters mt-lg-5 mb-lg-5 mt-md-4 mt-sm-4 pt-lg-5 pb-lg-5 justify-content-center space-between-section">
				<div class="col-md-12 mb-lg-3 text-center" data-aos="fade-down">
					<h2 class="mb-3 font-pef text-dark page-title">Merchandise</h2>
				</div>
				<?php
					foreach($merchandise as $items):
					?>
						<div class="col-md-3 col-sm-3 col-mb-4 mx-sm-3 text-center" data-aos="zoom-in">
							<a href="/merchandise">
								<img src="/images/merchandise/<?php echo $items->imageurl; ?>" alt="<?php echo $items->namaproduk; ?>" class="img-fluid" />
							</a>
						</div>

					<?php
						endforeach;
					?>
			</div>
			<!--Mechandise Section-->

			<div class="mt-lg-5 mb-lg-5 pt-lg-5 pb-lg-5 mt-md-3 pt-md-1 pt-sm-2"></div>
			<div class="mt-lg-5 mb-lg-5 pt-lg-5 pb-lg-5"></div>
			<div class="mt-lg-3 mb-lg-3 pt-lg-3 pb-lg-3"></div>
		</div>
	</div>

<div class="modal fade" id="welcomeModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-lg">
		<div class="modal-content bg-transparent border-0">
			<div class="row justify-content-center">
				<div class="col-lg-12 col-md-12 col-mb-8">
					<div class="embed-responsive embed-responsive-16by9">
						<video width="320" height="240" class="embed-responsive-item" autoplay loop autobuffer muted playsinline>
							<source src="/videos/welcome_screen.mp4" type="video/mp4">
							Your browser does not support the video tag.
						</video> 
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		$('#welcomeModal').modal('show');
		//var datetime = (new Date().getTime() / 1000) + (86400 * 2) + 1;
		var datetime = (Date.parse('<?php echo $event->tanggaleventstart; ?>'));
		//var flipdown = new FlipDown(datetime);
		//flipdown.start();

		var note = $('#note'),
			ts = new Date(2012, 0, 1);
	
		if((new Date()) > ts){
			// The new year is here! Count towards something else.
			// Notice the *1000 at the end - time must be in milliseconds
			ts = (new Date()).getTime() + 10*24*60*60*1000;
		}
		
		$('#countdown').countdown({
			timestamp	: datetime,
			callback	: function(days, hours, minutes, seconds){
			
				var message = "";
			
				message += days + " hari" + ", ";
				message += hours + " jam" + ", ";
				message += minutes + " menit" + " and ";
				message += seconds + " detik" + " <br />";
			
				note.html(message);
			}
		});
	});

	function showlogo() {
		if (!$('.logodetail').hasClass('logo-shows')) {
			//$('.logodetail').removeClass('logo-hide');
			//$('.logodetail').addClass('logo-show');
			$('.logodetail').addClass('logo-shows');
			$('.logodetail2').addClass('logo-shows');
			$('.logodetail3').addClass('logo-shows');
			$('.logodetail4').addClass('logo-shows');
		} else {
			//$('.logodetail').addClass('logo-hide');


			$('.logodetail').removeClass('logo-shows');
			$('.logodetail2').removeClass('logo-shows');
			$('.logodetail3').removeClass('logo-shows');
			$('.logodetail4').removeClass('logo-shows');
		}

		//if (!$('.logodetail2').hasClass('logo-show2')) {
			//$('.logodetail').removeClass('logo-hide');
			//$('.logodetail2').addClass('logo-show2');
		//} else {
		//	//$('.logodetail').addClass('logo-hide');
		//	$('.logodetail2').removeClass('logo-show2');
		//}

		
	}
</script>

<?php echo $this->endSection('content'); ?>