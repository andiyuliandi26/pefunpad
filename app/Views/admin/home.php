<?php 
	echo $this->extend('/admin/layouts/main');
?>

<?php echo $this->section('content'); ?>

<div class="row justify-content-center mt-5">
	<div class="col-md-3 mx-5">
		<img class="img-fluid" src="<?= base_url(); ?>/images/logopef.png" />
	</div>
	<div class="col-md-3 mx-5 pt-5">
		<img class="img-fluid mt-5" src="<?= base_url(); ?>/images/logounpad.png" />
	</div>
</div>

<?php echo $this->endSection('content'); ?>