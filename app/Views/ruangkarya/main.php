<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>
<style>
	@media (orientation: landscape) {
		.bg-ruangkarya {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			background-image: url("/images/ruangkarya/background.jpg");
			background-repeat: repeat-y;
			background-size: 100%;
		}
	}

	@media (orientation: portrait) {
		.bg-ruangkarya {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			/*background-position: center;*/
			background-image: url("/images/ruangkarya/background-portrait.jpg");
			background-repeat: repeat-y;
			background-size: 100%;
		}
	}

/*	.bg-ruangkarya {
		position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/ruangkarya/background.png");
        background-repeat: repeat-y;
        background-size: 100%;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}*/

	.ruangkarya-link:hover {
		transform:scale(1.1,1.1);
	}
</style>

<div class="bg-ruangkarya">
	<div class="container-page">
		<div class="row no-gutters justify-content-center pt-md-5">
			<div class="col-md-8 ftco-animate text-center">
				<h2 class="h1 text-center page-title text-dark mt-3">Ruang Karya</h2>
				<div class="row justify-content-center">
					<?php foreach($kategori as $items):?>
						<div class="col-md-4 col-mb-6 my-4">
							<a href="/ruangkarya/karyapeserta/<?php echo $items->id; ?>"><img class="img-fluid ruangkarya-link" alt="<?php echo $items->kategori;?>" src="/images/ruangkarya/<?php echo $items->imageurl; ?>"/></a>
						</div>
					<?php endforeach; ?>
				</div>
					
			</div>
		</div>
	</div>
</div>


<!--<div class="container-bg">
	<img class="image-bg" src="/images/ruangkarya/background.jpg" />
	<div class="content-page">
		<div class="row no-gutters justify-content-center mt-md-5 mt-4 main-event">
				<div class="col-md-8 col-sm-12 text-center">
					<h2 class="h1 text-center page-title text-dark mt-3">Ruang Karya</h2>
					<div class="row justify-content-center">
						<?php foreach($kategori as $items):?>
							<div class="col-md-4 col-sm-2 my-sm-2">
								<a href="/ruangkarya/karyapeserta/<?php echo $items->id; ?>"><img class="img-fluid ruangkarya-link" alt="<?php echo $items->kategori;?>" src="/images/ruangkarya/<?php echo $items->imageurl; ?>"/></a>
							</div>
						<?php endforeach; ?>
					</div>
					
				</div>
			</div>
	</div>
</div>-->
<?php 
	echo $this->endSection('content');
?>
