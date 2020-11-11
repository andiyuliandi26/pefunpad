<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Data Fakultas - Update</h1>
</div>
<?php echo form_open_multipart(current_url(),['method' => 'post']); ?>
    <div class="card shadow h-100 ">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Nama</label>
                    <?php echo form_input('namaproduk', $data->namaproduk, ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-1">
                    <label>Harga</label>
                    <?php echo form_input('harga', $data->harga, ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-1">
                    <label>Sequence</label>
                    <?php echo form_input('sequence', $data->sequence, ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-10">                    
                    <label>Image</label>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <img class="img-fluid" src="/images/merchandise/<?php echo $data->imageurl; ?>" />
                        </div>
                    </div>
                    <?php echo form_upload('imageupload', '', ['class' => 'form-control-file', 'id' => 'imageupload']); ?>
                 </div>
                <div class="form-group col-md-12">
                    <label>Deskripsi</label>
                    <?php echo form_textarea('deskripsi', $data->deskripsi, ['class'=>'form-control', 'id'=>'summernote']); ?>
                 </div>
                <div class="form-group col-md-12">
                    <div class="custom-control custom-switch">                   
                        <?php echo form_checkbox('isactive', 1, $data->isactive, ['class'=>'custom-control-input', 'id' => 'customSwitch']); ?>
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
<script>
      $('#summernote').summernote({
        tabsize: 2,
        height: 300
      });
</script>
<?php echo $this->endSection('content'); ?>