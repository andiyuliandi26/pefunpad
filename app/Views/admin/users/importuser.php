<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Data User - Import</h1>
    <?= view('Myth\Auth\Views\_message_block') ?>
</div>
<?php echo form_open_multipart(current_url(),['method' => 'post']); ?>
    <div class="card shadow h-100 ">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-7">
                    <label>File Excel</label>
                    <input type="file" name="fileexcel" class="form-control" id="file" required accept=".xls, .xlsx" />
                 </div>
            </div>            
        </div>
        <div class="card-footer">
            <button type="submit" value="Submit" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-default" onclick="validasi_file()">Validasi</button>
            <button type="button" class="btn btn-danger" onclick="window.history.back()">Kembali</button>
        </div>
    </div>
<?php echo form_close(); ?>
<script>
    function validasi_file() {
        var data = new FormData();
        jQuery.each(jQuery('#file')[0].files, function(i, file) {
            data.append('file-'+i, file);
        });

       $.ajax({
            url: '<?php echo base_url()."/api/users/validasi_file_excel";?>',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            success: function (data) {
                console.log(data);
            }
		});
    }

</script>
<?php echo $this->endSection('content'); ?>