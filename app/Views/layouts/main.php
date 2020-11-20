<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PEF x OHU</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!--<meta name="viewport" content="width=576, initial-scale=1.0">-->
    
    <!--<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">-->

    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/sb-admin-2/sb-admin-2.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap/bootstrap.css">
	  <link href="<?php echo base_url(); ?>/css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/fontawesome/css/regular.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/video-js.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/flipdown.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/jquery.countdown.css">
    <!--<link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css">-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/pefunpad.css" type="text/css">

      <script src="<?php echo base_url(); ?>/js/jquery-3.2.1.min.js"></script>
      <!--<script src="js/jquery-migrate-3.0.1.min.js"></script>-->
  </head>
  <body id="page-top">
      <style>
	  	.bg-awan {
			  /*width:100%;*/
			  height: auto;
	  		background-image: url('/images/bg-awan.png');
			content: '';
			background-repeat: no-repeat;
			/*background-size: 130% auto;*/
			padding-right:15px;
		}
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
			border-radius: 15px;
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
			font-size:25px;
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
			padding: 3em 30px 30px;
		}

	  	@media screen and (min-width: 1400px) {
	  		.video-container {
				width: 100%;
				height: auto;
				position: relative;
				content: '';
				background-image: url("/images/bg-video.png");
				background-repeat: no-repeat;
				background-size: 100% 100%;
				padding: 4em 30px 30px;
			}
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

/*		.scroll-to-top{ position:fixed;right:1rem;bottom:1rem;display:none;width:2.75rem;height:2.75rem;text-align:center;color:#fff;background:rgba(90,92,105,.5);line-height:46px}.scroll-to-top:focus,.scroll-to-top:hover{color:#fff}.scroll-to-top:hover{background:#5a5c69}.scroll-to-top i{font-weight:800}@-webkit-keyframes growIn{0%{transform:scale(.9);opacity:0}100%{transform:scale(1);opacity:1}}@keyframes growIn{0%{transform:scale(.9);opacity:0}100%{transform:scale(1);opacity:1}}
*/      </style>

	  <style>
		@media screen and (max-width: 575px) {
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
	  </style>
	  <div class="wrapper">
		  <div id="navigation">
			  <?= $this->include('/layouts/nav', $data); ?>
		  </div>

		  <div id="content">
			  <?= $this->renderSection('content'); ?>
			  
			  <div class="row no-gutters justify-content-center ftco-footer text-white py-2">
				<div class="col-md-12">
					<marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="8">
						"Hi, Padjadjaran Mates Follow media sosial PEF untuk mendapatkan informasi menarik dan edukatif. Instagram: <a href="https://www.instagram.com/pef_unpad/" target="_blank" class="card-link ml-0">@Pef_Unpad</a>, Youtube: <a href="https://www.youtube.com/channel/UCTT3JyiBKflPI6zkyoNM1Yg" target="_blank" class="card-link ml-0">Padjadjaran Education Festival</a>, TikTok: <a href="https://vt.tiktok.com/ZSmxJDpH/" target="_blank" class="card-link ml-0">@Pef_Unpad</a>, Twitter: <a href="https://twitter.com/PEF_unpad" target="_blank" class="card-link ml-0">@PEF_Unpad</a>,  Line: <a href="" target="_blank" class="card-link ml-0">@Pefunpad</a>, Facebook: <a href="https://www.facebook.com/pefunpad2020" target="_blank" class="card-link ml-0">Padjadjaran Education Festival</a>. Yuk dengarkan konten menarik di podcast <a href="https://link.tospotify.com/Um5bT5JIxbb" target="_blank" class="card-link ml-0">Padjadjaran Education Festival</a>. <strong class="text-danger">Let's Fly High, Padjadjaran Mates!</strong>"
					</marquee>
				</div>
			</div>
		  </div>


		  <footer class="ftco-footer ftco-bg-dark ftco-section py-sm-3">
			  <?= $this->include('/layouts/footer', $data); ?>
		  </footer>
	  </div>


	  <script src="<?php echo base_url(); ?>/js/popper.min.js"></script>
      <script src="<?php echo base_url(); ?>/js/sb-admin-2.min.js"></script>
      <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>/js/jquery.easing.1.3.js"></script>
      <script src="<?php echo base_url(); ?>/js/jquery.waypoints.min.js"></script>
      <script src="<?php echo base_url(); ?>/js/owl.carousel.min.js"></script>
      <script src="<?php echo base_url(); ?>/js/jquery.magnific-popup.min.js"></script>
      <script src="<?php echo base_url(); ?>/js/aos.js"></script>
      <script src="<?php echo base_url(); ?>/js/jquery.animateNumber.min.js"></script>
      <script src="<?php echo base_url(); ?>/js/bootstrap-datepicker.js"></script>
      <script src="<?php echo base_url(); ?>/js/scrollax.min.js"></script>
      <script src="<?php echo base_url(); ?>/js/flipdown.min.js"></script>
      <script src="<?php echo base_url(); ?>/js/jquery.countdown.js"></script>
      <script src="<?php echo base_url(); ?>/js/main.js"></script>
	  <script>
		  $(document).ready(function () {
			  $('[data-toggle="tooltip"]').tooltip();
		  });
	  </script>
</body>
</html>