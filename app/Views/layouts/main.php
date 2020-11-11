<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PEF x OHU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">-->

    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap/bootstrap.css">
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
  <body>
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

	  <div class="wrapper">
		  <div id="navigation">
			  <?= $this->include('/layouts/nav', $data); ?>
		  </div>

		  <div id="content">
			  <?= $this->renderSection('content'); ?>
		  </div>

		  <footer class="ftco-footer ftco-bg-dark ftco-section py-sm-3">
			  <?= $this->include('/layouts/footer', $data); ?>
		  </footer>
	  </div>


	  <script src="<?php echo base_url(); ?>/js/popper.min.js"></script>
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
	  
       <script type="text/javascript" src="https://www.youtube.com/iframe_api"></script>
</body>
</html>