<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>
<style>
	.video-size {
		width: 750px;
		height: 100%;
	}

	.video-frame {
		width: 100%;
		height: auto;
		position: relative;
		content: '';
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

	.logo-description {
		font-size:14px;
		line-height:1.2;
	}

	.logo-title {
		font-size:2vw;
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

	.container-bg {
		position: relative;
		width:100%;
	}

	.image-bg {
	  opacity: 1;
	  display: block;
	  width: 100%;
	  height: auto;
	  transition: .5s ease;
	  backface-visibility: visible;
	}

	.content-page {
	  opacity: 1;
	  position: absolute;
	  top: 1rem;
	  width:100%;
	  text-align: center;
	}

	.video-container {
		width: 100%;
		height: auto;
		position: relative;
		content: '';
		background-image: url("/images/bg-video.png");
		background-repeat: no-repeat;
		background-size: 100% 100%;
		padding: 4em 1.5em 1.5em 1.5em;
	}

	.section-title {
		font-size:3em;
	}

	.rangkaian-acara {
		font-size:1.5em;
	}

	.footer-title {
		font-size:30px;
		font-weight:300;
	}

	.video-container {
		width: 100%;
		height: auto;
		position: relative;
		content: '';
		background-image: url("/images/bg-video.png");
		background-repeat: no-repeat;
		background-size: 100% 100%;
		padding: 2.3em 1.7em .7em 2em;
	}

	@media screen and (max-width: 786px) {
		.main-event {
			padding-top:0px;
		}

		.video-container {
			width: 100%;
			height: auto;
			position: relative;
			content: '';
			background-image: url("/images/bg-video.png");
			background-repeat: no-repeat;
			background-size: 100% 100%;
			padding: 1.8em .7em .7em .7em;
		}

		.section-title {
			font-size:1.8em;
		}
		.rangkaian-acara {
		font-size:1em;
	}
	}



	@media only screen and (max-width:600px) {
		.video-container-sm {
			width:70%;
			margin: auto;
		}

		.logo-description {
			font-size:10px;
			line-height:1.2;
		}

		.logo-title {
			font-size:12px;
		}

		.section-title {
			font-size:2em;
		}

		.rangkaian-acara {
			font-size:.7em;
		}
		
		.text-container {
			width: 100%;
			height: 100%;
			position: relative;
			content: '';
			background-image: url("/images/bg-text.png");
			background-repeat: no-repeat;
			background-size: 100% 100%;
			padding: 5px 10px;
		}

		.footer-title {
			font-size:20px;
			font-weight:300;
		}
	}

</style>

<div class="container-bg">
	<img class="image-bg" src="/images/homepage/bg/polos_01.png" />
	<div class="content-page mt-xs-3 mt-lg-5 mt-sm-3 mt-md-4">
		<div class="row no-gutters justify-content-center main-event pt-sm-3" data-aos="fade-down">
			<div class="col-md-8 col-sm-6 text-center">
				<h3 class="text-dark page-title"> 21 - 22 November 2020 </h3>
				<div id="countdown" class="countdownHolder"></div>
			</div>
			<div class="col-md-7 col-sm-9 col-xs-6 px-5">
				<img class="img-fluid" src="/images/homepage/mainevent.png" />
				<!--<div class="container-bg">
					
				</div>-->
				<!--<div class="video-container video-container-sm">							
					
				</div>-->
			</div>
		</div>
	</div>
</div>

<div class="container-bg d-block d-sm-none">
	<img class="image-bg" src="/images/homepage/bg/polos_02.png" />
	<div class="content-page">
		<div class="row no-gutters mt-md-3">
			<!--<div class="col-sm-6 col-xs-4 px-5">						
					<img class="img-fluid" src="/images/logopef.png" style="cursor:pointer;" onclick="showlogo();" id="peflogobtn"/>
			</div>-->
			<div class="col-md-2 col-sm-3 col-xs-3 px-sm-2 mr-sm-0 text-center">
				<div class="row no-gutters justify-content-center">
					<div class="col-sm-8">						
						<img class="img-fluid" src="/images/logopef.png" style="cursor:pointer;" onclick="showlogo();" id="peflogobtn" data-aos="fade-up" />
					</div>
					<div class="col-sm-8">
						<p class="logo-title" data-aos="fade-in">in collaboration with</p></div>
					<div class="col-sm-8">
						<img class="img-fluid mt-3" src="/images/logoohu.png" data-aos="fade-up" />
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-9">
				<div class="row no-gutters">
					<div class="col-md-2 col-sm-2 col-xs-2 pr-sm-0">
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
					<div class="col-md-2 col-sm-2 col-xs-2 pr-sm-0">
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
					<div class="col-md-2 col-sm-2 pr-sm-0">
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
					<div class="col-md-2  col-sm-2 pr-sm-0">
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
			<!--<div class="col-sm-8">-->
				<!--<img class="img-fluid" src="/images/pef-ohu.png" />-->
				<!--<h1 class="font-pef text-danger mb-1 display-2">PEF x OHU 2020</h1>
				<h1 class="font-pef text-danger">Wings of Collaboration</h1>
			</div>-->
		</div>
	</div>
</div>

<div class="container-bg d-none d-md-block ">
	<img class="image-bg" src="/images/homepage/bg/polos_02.png" />
	<div class="content-page">
		<div  class="row no-gutters mt-2 justify-content-center text-center">
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
			<div class="row no-gutters mt-2 pt-2 justify-content-center text-center" data-aos="fade-in">
				<div class="col-sm-8">
					<!--<img class="img-fluid" src="/images/pef-ohu.png" />-->
					<h1 class="font-pef text-danger mb-1 display-4">PEF x OHU 2020</h1>
					<h3 class="font-pef text-danger">Wings of Collaboration</h3>
				</div>
			</div>
	</div>
</div>

<div class="container-bg">
	<img class="image-bg" src="/images/homepage/bg/polos_03.png" />
	<div class="content-page pt-md-5">
		<div class="row no-gutters mt-sm-2 justify-content-center" data-aos="fade-down">
			<div class="col-md-6 text-center">
				<p class="mb-4 font-pef text-danger section-title">Maskot PEF 2020</p>
			</div>
		</div>
		<div class="row no-gutters justify-content-center ">
			<div class="col-md-3 col-sm-3 text-center mx-5" data-aos="fade-right">
					<img class="img-fluid" src="/images/maskot-siro.png" />
			</div>
			<div class="col-md-3 col-sm-3 text-center mx-5" data-aos="fade-left">
				<img class="img-fluid" src="/images/maskot-vivi.png" />
			</div>
		</div>

	</div>
</div>

<div class="row no-gutters justify-content-center">
	<div class="container-bg">
		<img class="image-bg" src="/images/homepage/bg/polos_04.png" />
		<div class="content-page">
			<div class="row no-gutters mt-sm-2 justify-content-center" data-aos="zoom-in">
				<div class="col-md-6 text-center">
					<p class="mb-2 font-pef text-danger section-title">Rangkaian PEF x OHU 2020</p>
				</div>
			</div>
			<div class="row no-gutters justify-content-center pt-sm-2 pb-sm-3">
				<?php
				foreach($rangkaianacara as $items):
				?>
					<div class="col-md-3 col-sm-4 p-3">
						<div class="text-container py-sm-1 py-md-4 text-center" data-aos="zoom-in">
							<p class="font-pef text-danger rangkaian-acara my-xl-3">
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

<div class="container-bg">
	<img class="image-bg" src="/images/homepage/bg/polos_05.png" />
	<div class="content-page">
		<div class="row no-gutters justify-content-center pt-md-3">
			<div class="col-md-6 text-center" data-aos="fade-down">
				<h2 class="mb-4 font-pef section-title text-success section-title">Throwback</h2>
			</div>
		</div>
		<div class="row no-gutters mt-2 justify-content-center" data-aos="zoom-in-up">
			<div class="col-md-6 col-sm-6">
				<div class="video-container">
					<div class="iframe-container">
						<?= generate_yt_iframe("LpUB2RnHeWg"); ?>
					<!--<iframe class="responsive-iframe"  src="https://www.youtube.com/embed/BUM8SeH3gCI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
						<!--<iframe class="responsive-iframe" src="https://www.youtube.com/embed/LpUB2RnHeWg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;"></iframe>-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-bg">
	<img class="image-bg" src="/images/homepage/bg/polos_06.png" />
	<div class="content-page">
		<div class="row no-gutters justify-content-center">
			<div class="col-md-8">
				<div class="row no-gutters justify-content-center pt-2">
					<div class="col-md-6 text-center" data-aos="fade-down">
						<h2 class="mb-4 font-pef section-title text-dark section-title">Merchandise</h2>
					</div>
				</div>
				<div class="row no-gutters justify-content-center mt-md-3">
					<?php
					foreach($merchandise as $items):
					?>
						<div class="col-md-3 col-sm-3 mx-sm-3 text-center" data-aos="zoom-in">
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
		var datetime = (Date.parse('<?php echo $event->tanggalevent; ?>'));
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

<?php echo $this->endSection('content'); ?>