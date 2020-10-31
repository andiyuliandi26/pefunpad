<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Data </h1>
    <a href="/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Tambah </a>
</div>

<div class="card shadow h-100 ">
    <div class="card-body table-responsive">
    </div>
</div>

<?php echo $this->endSection('content'); ?>