<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Data User - Tambah</h1>
    <?= view('Myth\Auth\Views\_message_block') ?>
</div>
<?php echo form_open_multipart(current_url(),['method' => 'post']); ?>
    <div class="card shadow h-100 ">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-7">
                    <label>Username</label>
                    <?php echo form_input('username', '', ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-7">
                    <label>Email</label>
                    <?php echo form_input('email', '', ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-7">
                    <label>Password</label>
                    <?php echo form_password('password', '', ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-6">
                    <label>Roles</label>
                    <?php echo form_dropdown("authgroups", $roleslist, null, ['class' => 'custom-select']); ?>
                 </div>
            </div>            
        </div>
        <div class="card-footer">
            <button type="submit" value="Submit" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-danger" onclick="window.history.back()">Kembali</button>
        </div>
    </div>
<?php echo form_close(); ?>
<script>
      $('#summernote').summernote({
        tabsize: 2,
        height: 300
      });
</script>
<?php echo $this->endSection('content'); ?>