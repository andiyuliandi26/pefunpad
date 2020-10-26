
<style>
	.bg-ruangkarya {
		position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/ruangkarya/background.jpg");
        background-repeat: repeat-y;
        background-size: cover;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}

	.ruangkarya-link:hover {
		transform:scale(1.1,1.1);
	}
</style>
<div class="hero-wrap js-fullheight">
	<div class="bg-ruangkarya">
		<div class="container-page">
			<div class="row no-gutters justify-content-center">
				<div class="col-md-8 ftco-animate text-center">
					<h2 class="h1 text-center page-title text-dark mt-3">Ruang Karya</h2>
					<div class="row justify-content-center">
						<?php foreach($kategori as $items):?>
							<div class="col-md-4 my-4">
								<a href="#"><img class="img-fluid ruangkarya-link" alt="<?php echo $items->kategori;?>" src="/images/ruangkarya/<?php echo $items->imageurl; ?>"/></a>
							</div>
						<?php endforeach; ?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
