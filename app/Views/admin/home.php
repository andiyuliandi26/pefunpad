<?php 
	echo $this->extend('/admin/layouts/main');
?>

<?php echo $this->section('content'); ?>

<div class="row justify-content-center mt-2">
	<div class="col-md-3 mx-5">
		<div class="card text-center ">
			<div class="card-header bg-primary">
				<h1 class="card-title text-white">
					Total Visitor
				</h1>
			</div>
			<div class="card-body text-center font-weight-bold">
				<h1><?= $visitor['totalvisitor']?></h1>
			</div>
		</div>
	</div>
	<div class="col-md-3 mx-5">
		<div class="card  text-center ">
			<div class="card-header bg-success">
				<h1 class="card-title text-white">
					Total Visitor Hari Ini
				</h1>
			</div>
			<div class="card-body font-weight-bold">
				<h1><?= $visitor['totalvisitortoday']?></h1>
			</div>
		</div>
	</div>
</div>

<div class="row justify-content-center mt-5">
	<div class="col-md-3 mx-5">
		<img class="img-fluid" src="<?= base_url(); ?>/images/logopef.png" />
	</div>
	<div class="col-md-3 mx-5 pt-5">
		<img class="img-fluid mt-5" src="<?= base_url(); ?>/images/logounpad.png" />
	</div>
</div>

<?php echo $this->endSection('content'); ?>