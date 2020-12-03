<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Data Peserta Ruang Karya - Update</h1>
</div>
<?php echo form_open_multipart(current_url(),['method' => 'post']); ?>
    <div class="card shadow h-100 ">
        <div class="card-body">
            <div class="form-row">

                 <div class="form-group col-md-3">
                    <label>Kategori</label>
                    <?php echo form_dropdown("kategoriid", $kategorilist, $data->kategoriid, ['class' => 'custom-select']); ?>
                 </div>  
                <div class="form-group col-md-10">
                    <label>Asal Sekolah</label>
                    <?php echo form_input('asalsekolah',  $data->asalsekolah, ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-10">
                    <label>Nama Tim</label>
                    <?php echo form_input('namatim',  $data->namatim, ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-9">
                    <label>Deskripsi Peserta</label>
                    <?php echo form_textarea('namapeserta',  $data->namapeserta, ['class'=>'form-control summernote', 'row' => '10']); ?>
                 </div>
                <div class="form-group col-md-9">
                    <label>Judul Karya</label>
                    <?php echo form_textarea('judulkarya',  $data->judulkarya, ['class'=>'form-control', 'row' => '10']); ?>
                 </div>
                <div class="form-group col-md-4">
                    <label>Jenis Karya</label>
                    <?php echo form_dropdown("jeniskarya", $jeniskaryalist,  $data->jeniskarya, ['class' => 'custom-select']); ?>
                 </div>
                <div class="form-group col-md-4">
                    <label>Status Peserta</label>
                    <?php echo form_dropdown("statuspeserta", $statuspesertalist,  $data->statuspeserta, ['class' => 'custom-select']); ?>
                 </div>
                <div class="form-group col-md-9">
                    <label>Video Url (Youtube ID)</label>
                    <?php echo form_input('videourl', "{$data->videourl}", ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-10">
                    <label>Poster</label>
                    <div class="row">
                        <div class="col-md-2">
                            <?php if($data->imageurl != ""): ?>
                                <img class="img-fluid" src="/images/ruangkarya/<?php echo $data->imageurl; ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php echo form_upload('imageupload', '', ['class' => 'form-control-file', 'id' => 'imageupload']); ?>
                 </div>
                <div class="form-group col-md-3">
                    <label>Is Active</label>
                    <?php echo form_input('isactive', "{$data->isactive}", ['class'=>'form-control']); ?>
                 </div>
                <!--<div class="form-group col-md-12">
                    <div class="custom-control custom-switch">                   
                        <?php echo form_checkbox('isactives', 1, $data->isactive, ['class'=>'custom-control-input', 'id' => 'customSwitchs']); ?>
                        <label class="custom-control-label" for="customSwitchs">Is Active?</label>
                    </div>
                </div>-->
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
