<?php 
	echo $this->extend('/admin/layouts/main');
    echo $this->section('content');
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Data Merchandise - Tambah</h1>
</div>
<?php echo form_open_multipart(current_url(),['method' => 'post']); ?>
    <div class="card shadow h-100 ">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Nama</label>
                    <?php echo form_input('namaproduk', '', ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-1">
                    <label>Harga</label>
                    <?php echo form_input('harga', 0, ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-1">
                    <label>Sequence</label>
                    <?php echo form_input('sequence', 1, ['class'=>'form-control']); ?>
                 </div>
                <div class="form-group col-md-6">
                    <label>Image</label>
                    <?php echo form_upload('imageupload', '', ['class' => 'form-control-file', 'id' => 'imageupload']); ?>
                 </div>
                <div class="form-group col-md-12">
                    <label>Deskripsi</label>
                    <?php echo form_textarea('deskripsi', '', ['class'=>'form-control', 'id'=>'summernote']); ?>
                 </div>
                <!--<div class="form-group col-md-12">
                    <h5>Market Place</h5>
                    <div class="form-row">
                        <div class="form-group col-md-3">                            
                            <input type="text" id="namamarket" class="form-control" placeholder="Nama Market Place"/>
                         </div>
                        <div class="form-group col-md-3">                            
                            <input type="text" id="hyperlink" class="form-control" placeholder="Hyperlink"/>
                         </div>                        
                        <div class="form-group col-md-1">                            
                            <input type="text" id="sequencemarket" class="form-control" placeholder="Sequence" value="1"/>
                         </div>
                        <div class="form-group col-md-1">                            
                            <button type="button" class="btn btn-success" onclick="addMarket()">Add</button>
                         </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td></td>
                                <td>Nama Market Place</td>
                                <td>Hyperlink</td>
                                <td>Sequence</td>
                            </tr>
                        </thead>
                        <tbody id="marketfill">

                        </tbody>
                    </table>
                </div>-->
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
    $('#summernote').summernote({
    tabsize: 2,
    height: 300
    });

    function addMarket() {
        var namamarket = $('#namamarket').val();
        var hyperlink = $('#hyperlink').val();
        var sequence = $('#sequencemarket').val();

        $('#marketfill').append('<tr>' +
            '<td></td>' +
            '<td>' + namamarket + '</td>' +
            '<td>' + hyperlink + '</td>' +
            '<td>' + sequence + '</td>' +
            '</tr>');

        $('#namamarket').val('');
        $('#hyperlink').val('');
        $('#sequencemarket').val(1);
    }
  
</script>
<?php echo $this->endSection('content'); ?>