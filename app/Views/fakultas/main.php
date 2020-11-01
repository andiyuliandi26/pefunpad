
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
						<?php
						$index = 1;
						foreach($fakultas as $items): ?>							
							<div class="col-md-2 my-3" data-aos="zoom-in">
								
									<img data-toggle="modal" data-target="#modal<?php echo $index; ?>"  class="img-fluid" src="/images/fakultas/<?php echo $items->image_url; ?>" alt="<?php echo $items->singkatan; ?>" />
							
							</div>
						<?php 
							$index++;	
							endforeach; ?>
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

<?php
	$index2 = 1;
	foreach($fakultas as $items): 
?>
<div class="modal fade" id="modal<?= $index2; ?>" tabindex="-1" aria-labelledby="myModalLabel<?= $index2; ?>" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel<?= $index2; ?>"><?= $items->nama; ?></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mb-0 p-0">
				<div class="row">
					<div class="col-md-12 mx-3">
						<?= $items->deskripsi; ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php 
	$index2++;	
	endforeach; 
?>
