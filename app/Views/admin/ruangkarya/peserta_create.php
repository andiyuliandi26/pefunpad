<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Data Peserta Ruang Karya - Tambah</h1>
</div>
<?php echo form_open_multipart(current_url(),['method' => 'post']); ?>
    <div class="card shadow h-100 ">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Kategori</label>
                    <?php echo form_dropdown("kategoriid", $kategorilist, null, ['class' => 'custom-select']); ?>
                 </div>  
                <div class="form-group col-md-10">
                    <label>Nama Peserta</label>
                    <?php echo form_input('namapeserta', '', ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-6">
                    <label>Deskripsi Peserta</label>
                    <?php echo form_textarea('deskripsipeserta', '', ['class'=>'form-control', 'row' => '10']); ?>
                 </div>
                <div class="form-group col-md-6">
                    <label>Judul Karya</label>
                    <?php echo form_textarea('judulkarya', '', ['class'=>'form-control', 'row' => '10']); ?>
                 </div>
                <div class="form-group col-md-4">
                    <label>Jenis Karya</label>
                    <?php echo form_dropdown("jeniskarya", $jeniskaryalist, null, ['class' => 'custom-select']); ?>
                 </div>
                <div class="form-group col-md-4">
                    <label>Status Peserta</label>
                    <?php echo form_dropdown("statuspeserta", $statuspesertalist, null, ['class' => 'custom-select']); ?>
                 </div>
                <div class="form-group col-md-10">
                    <label>Url Karya</label>
                    <?php echo form_input('urlkarya', '', ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-12">
                    <div class="custom-control custom-switch">                   
                        <?php echo form_checkbox('isactive', 1, TRUE, ['class'=>'custom-control-input', 'id' => 'customSwitch']); ?>
                        <label class="custom-control-label" for="customSwitch">Is Active?</label>
                    </div>
                </div>
            </div>            
        </div>
        <div class="card-footer">
            <button type="submit" value="Submit" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-danger" onclick="window.history.back()">Kembali</button>
        </div>
    </div>
<?php echo form_close(); ?>

<?php echo $this->endSection('content'); ?>