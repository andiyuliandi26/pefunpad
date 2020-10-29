
<style>
	.bg-fakultas {
		position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/fakultas/background.jpg");
        background-repeat: repeat-y;
        background-size:  100% 100%;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}
		.bg-fakultas .img-fluid:hover {
			transform:scale(1.1,1.1);
		}

		.bg-fakultas .img-fluid {
			border-radius:10px;
		}
</style>
<div class="hero-wrap">
	<div class="bg-fakultas">
		<div class="container-page">
			<div class="row no-gutters justify-content-center">
				<div class="col-md-12 ftco-animate text-center">
					<h2 class="h1 text-center page-title mt-3" style="color:orangered" data-aos="fade-down">Fakultas</h2>
					<div class="row justify-content-center mt-3">
						<?php foreach($fakultas as $items): ?>
							<div class="col-md-2 my-3" data-aos="zoom-in">
								<a href="#">
									<img class="img-fluid" src="/images/fakultas/<?php echo $items->image_url; ?>" alt="<?php echo $items->singkatan; ?>" />
								</a>
							</div>
						<?php endforeach; ?>
					</div>
					
					<h2 class="h1 text-center page-title mt-5" style="color:orangered" data-aos="fade-down">Markipad</h2>
					<div class="row justify-content-center">
						<?php for($i = 0; $i < 6; $i++): ?>
						<div class="col-md-2 my-3" data-aos="zoom-in">
							<div class="text-container"></div>
						</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
