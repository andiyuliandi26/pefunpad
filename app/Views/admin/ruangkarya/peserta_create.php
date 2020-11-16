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
                <div class="form-group col-md-4">
                    <label>Kategori</label>
                    <?php echo form_dropdown("kategoriid", $kategorilist, null, ['class' => 'custom-select']); ?>
                 </div>  
                <div class="form-group col-md-9">
                    <label>Asal Sekolah</label>
                    <?php echo form_input('asalsekolah', '', ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-9">
                    <label>Nama Tim</label>
                    <?php echo form_input('namatim', '', ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-8">
                    <label>Nama Peserta</label>
                    <?php echo form_textarea('namapeserta', '', ['class'=>'form-control summernote', 'row' => '10']); ?>
                 </div>
                <div class="form-group col-md-9">
                    <label>Judul Karya</label>
                    <?php echo form_textarea('judulkarya', '', ['class'=>'form-control', 'rows' => 3]); ?>
                 </div>
                <div class="form-group col-md-4">
                    <label>Jenis Karya</label>
                    <?php echo form_dropdown("jeniskarya", $jeniskaryalist, null, ['class' => 'custom-select']); ?>
                 </div>
                <div class="form-group col-md-4">
                    <label>Status Peserta</label>
                    <?php echo form_dropdown("statuspeserta", $statuspesertalist, null, ['class' => 'custom-select']); ?>
                 </div>
                <div class="form-group col-md-9">
                    <label>Video Url (Youtube ID)</label>
                    <?php echo form_input('videourl', '', ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-6">
                    <label>Poster</label>
                    <?php echo form_upload('imageupload', '', ['class' => 'form-control-file', 'id' => 'imageupload']); ?>
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
<script>
      $('.summernote').summernote({
        tabsize: 2,
        height: 300
      });
</script>
<?php echo $this->endSection('content'); ?>