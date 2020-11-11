<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>
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
<div class="hero-wrap js-fullheight d-none d-lg-block d-sm-none">
	<div class="bg-virtualtour">		 
		<div class="container-page">
			<div class="row no-gutters justify-content-center pt-md-5">
				<div class="col-md-12 ftco-animate text-center">
					<h2 class="h1 text-center page-title mt-3 text-dark">Webinar</h2>
					<div class="row justify-content-center">
						<div class="col-md-8 col-sm-12 my-4">
							<div class="text-container">
								<div class="card-body">									
									<p class="lead text-justify">
									</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-bg d-none d-md-block d-sm-block d-lg-none">
	<img class="image-bg" src="/images/virtualtour/background.jpg" />
	<div class="content-page">
		<div class="row no-gutters justify-content-center mt-md-5 mt-4 main-event">
			<div class="col-md-10 col-sm-10 ftco-animate text-center">
				<h2 class="h1 text-center page-title text-dark mt-3">Webinar</h2>
				<div class="row justify-content-center">
					<div class="col-md-12 col-sm-12">
						<div class="text-container">
							<div class="card-body">									
								<p class="text-justify">
									Tes Minat Bakat merupakan sebuah rangkaian tes dan analisis yang menggambarkan kemampuan kognitif, karakterisik minat, serta kepribadian terhadap suatu bidang/jurusan tertentu. PEF tetap hadir dan memberikan fasilitas kepada sista/siswi SMA/SMK sederajat untuk dapat mengetahui karakterisik belajar dan jurusan apa yang sekiranya sesuai untuk mereka di jenjang perkuliahan nanti.
								</p>
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>
	</div>
</div>
<?php echo $this->endSection('content'); ?>