
<style>
	.bg-merchandise {
		position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/merchandise/background.jpg");
        background-repeat: repeat-y;
        background-size:  100% 100%;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}

		.bg-merchandise .container-page {
			padding-bottom:50px;
		}
</style>
<div class="hero-wrap">
	<div class="bg-merchandise">
		<div class="container-page">
			<div class="row no-gutters justify-content-center">
				<div class="col-md-8 ftco-animate text-center">
					<h2 class="h1 text-center page-title text-danger mt-3">Merchandise</h2>
					<div class="row justify-content-center">
						<?php foreach($merchandise as $items): ?>
							<div class="col-md-3">
								<img class="img-fluid" src="/images/merchandise/<?php echo $items->imageurl; ?>?>" alt="<?php echo $items->namaproduk; ?>" />
								<p class="lead text-danger font-weight-bold mb-0"> <?php echo $items->namaproduk; ?></p>
								<h5 class="h4 text-danger mb-2"> Rp. <?php echo $items->harga; ?></h5>
								<button class="btn btn-danger">Buy</button>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="row justify-content-center mt-5">
						<div class="col-md-8">
							<div class="video-container">

							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
