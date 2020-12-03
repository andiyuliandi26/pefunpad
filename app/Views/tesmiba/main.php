<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>

<style>
	/*.bg-tesmiba {
		position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/tesmiba/background.jpg");
        background-repeat: repeat-y;
        background-size: 100%;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}*/

	@media (orientation: landscape) {
		.bg-tesmiba {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			background-image: url("/images/tesmiba/background.jpg");
			background-repeat: repeat-y;
			background-size: 100% auto;
		}
	}

	@media (orientation: portrait) {
		.bg-tesmiba {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			/*background-position: center;*/
			background-image: url("/images/tesmiba/background.jpg");
			background-repeat: repeat-y;
			background-size: 100%;
		}
	}

</style>
	<div class="bg-tesmiba">
		<div class="container-page">
			<div class="row no-gutters justify-content-center pt-md-5">
				<div class="col-md-10 ftco-animate text-center">
					<h2 class="h1 text-center page-title text-dark mt-3">Tes Miba</h2>
					<h4 class="text-center font-pef h3 text-dark">Apa Itu Tes Miba?</h4>
					<div class="row justify-content-center">
						<div class="col-md-12">
							<div class="text-container">
								<div class="card-body">									
									<p class="lead text-justify">
										Tes Minat Bakat merupakan sebuah rangkaian tes dan analisis yang menggambarkan kemampuan kognitif, karakterisik minat, serta kepribadian terhadap suatu bidang/jurusan tertentu. PEF tetap hadir dan memberikan fasilitas kepada sista/siswi SMA/SMK sederajat untuk dapat mengetahui karakterisik belajar dan jurusan apa yang sekiranya sesuai untuk mereka di jenjang perkuliahan nanti.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center mt-5 mb-5">
						<div class="col-md-12">
							<div class="text-container">
								<h4 class="text-center font-pef h3 mt-3 text-dark">Dokumentasi</h4>
								<div class="card-body">									
									<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
									  <div class="carousel-inner">
										<div class="carousel-item active">
										  <img src="/images/tesmiba/tesmiba_1.jpg" class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
										  <img src="/images/tesmiba/tesmiba_2.jpg" class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
										  <img src="/images/tesmiba/tesmiba_3.jpg" class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
										  <img src="/images/tesmiba/tesmiba_4.jpg" class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
										  <img src="/images/tesmiba/tesmiba_5.jpg" class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
										  <img src="/images/tesmiba/tesmiba_6.jpg" class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
										  <img src="/images/tesmiba/tesmiba_7.jpg" class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
										  <img src="/images/tesmiba/tesmiba_8.jpg" class="d-block w-100" alt="...">
										</div>
										<div class="carousel-item">
										  <img src="/images/tesmiba/tesmiba_9.jpg" class="d-block w-100" alt="...">
										</div>
									  </div>
									  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									  </a>
									  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									  </a>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

<?php 
    echo $this->EndSection('content');
?>