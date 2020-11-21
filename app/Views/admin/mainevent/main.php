<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Setup Main Event</h1>
    <?= view('Myth\Auth\Views\_message_block') ?>
</div>
<?php echo form_open_multipart(current_url(),['method' => 'post']); ?>
    <div class="card shadow h-100 ">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-7">
                    <label>Nama</label>
                    <?php echo form_input('namaevent', $data->namaevent, ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-10">
                    <label>Event Date Title</label>
                    <?php echo form_input('eventdatetitle', $data->eventdatetitle, ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-3">
                    <label>Tanggal Mulai</label>
                    <?php echo form_input('tanggaleventstart', $data->tanggaleventstart, ['class'=>'form-control datepicker']); ?>
                 </div>
                <div class="form-group col-md-3">
                    <label>Tanggal Selesai</label>
                    <?php echo form_input('tanggaleventend', $data->tanggaleventend, ['class'=>'form-control datepicker']); ?>
                 </div>
                <div class="form-group col-md-3">
                    <label>Live Streaming Url</label>
                    <?php echo form_input('livestreamingurl', $data->livestreamingurl, ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-12">
                    <label>Poster</label>
                    <div class="row">
                        <div class="col-md-2 mb-3">
                            <img class="img-fluid" src="/images/mainevent/<?php echo $data->posterurl; ?>" />
                        </div>
                    </div>
                    <?php echo form_upload('imageupload', '', ['class' => 'form-control-file', 'id' => 'imageupload']); ?>
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
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
    });
</script>
<?php echo $this->endSection('content'); ?>