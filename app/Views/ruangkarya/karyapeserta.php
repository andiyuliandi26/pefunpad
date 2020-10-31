
<style>
	.bg-ruangkarya {
		position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/ruangkarya/background.jpg");
        background-repeat: repeat-y;
        background-size: 100% 100%;
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
					<h2 class="h1 text-center page-title text-dark mt-3">Karya Peserta Kategori <?php echo $karyapeserta[0]->kategori; ?></h2>
					<h2 class="h1 text-center page-title text-dark mt-3">Juara</h2>
					<div class="row justify-content-center">
						<?php foreach($karyapeserta as $items):?>
							<?php if(strstr($items->statuspeserta, "Juara")): ?>
								<div class="col-md-4 my-4">
									
								</div>
							<?php endif; ?>
							
						<?php endforeach; ?>
					</div>
					
				</div>
				<div class="col-md-8 ftco-animate text-center">
					<h2 class="h1 text-center page-title text-dark mt-3">Peserta</h2>
					<div class="row justify-content-center">
						<?php foreach($karyapeserta as $items):?>
							<?php if(!strstr($items->statuspeserta, "Juara")): ?>
								<div class="col-md-4 my-4">
									
								</div>
							<?php endif; ?>
							
						<?php endforeach; ?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
