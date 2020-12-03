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
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table-responsive table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Nama User</th>
                                <th>Nomor Handphone</th>
                            </tr>
                        </thead>
                        <tbody id="isiData">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="spinner-border" style="width: 3rem; height: 3rem; display:none;" role="status" id="Spinner">
              <span class="sr-only">Loading...</span>
            </div>
            <div id="status_transaksi">

            </div>
            <button type="button" class="btn btn-default mr-3" onclick="validasi_file()">Validasi</button>

            <button type="button" value="Submit Peserta" class="btn btn-success mr-3" onclick="save_data_peserta()">Submit Peserta</button>
            <button type="button" value="Submit Panitia" class="btn btn-success mr-3" onclick="save_data_panitia()">Submit Panitia</button>
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
                var appendString = "";
                for (var i = 0; i < data.length; i++) {
                    appendString += '<tr>' +
                        '<td>'+ data[i][0] +'</td>' +
                        '<td>'+ data[i][1] +'</td>' +
                        '<td>'+ data[i][2] +'</td>' +
                        '<td>'+ data[i][3] +'</td>' +
                        '<td>'+ data[i][4] +'</td>' +
                        '</tr>';
                }

                $('#isiData').empty().append(appendString);
            }
		});
    }

    function save_data_peserta() {
        var data = new FormData();
        jQuery.each(jQuery('#file')[0].files, function(i, file) {
            data.append('file-'+i, file);
        });
        $('#Spinner').show();
        $('#isiData').empty();

       $.ajax({
            url: '<?php echo base_url()."/api/users/save_data_peserta";?>',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
           success: function (data) {
               
               console.log(data);
               $('#Spinner').hide();
               $('#status_transaksi').empty().append(
                   '<ul class="list-group">' +
                      '<li class="list-group-item">Jumlah Data Sukses : ' + data[0].JumlahSukses +'</li>' +
                      '<li class="list-group-item">Jumlah Data Gagal : ' + data[0].JumlahGagal +'</li>' +
                      '<li class="list-group-item">Jumlah Data Sukses : ' + data[0].Error[0] +'</li>' +
                    '</ul>'
               );

            }
		});
    }

    function save_data_panitia() {
        var data = new FormData();
        jQuery.each(jQuery('#file')[0].files, function(i, file) {
            data.append('file-'+i, file);
        });
        $('#Spinner').show();
        $('#isiData').empty();

       $.ajax({
            url: '<?php echo base_url()."/api/users/save_data_panitia";?>',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
           success: function (data) {
               
               console.log(data);
               $('#Spinner').hide();
               $('#status_transaksi').empty().append(
                   '<ul class="list-group">' +
                      '<li class="list-group-item">Jumlah Data Sukses : ' + data[0].JumlahSukses +'</li>' +
                      '<li class="list-group-item">Jumlah Data Gagal : ' + data[0].JumlahGagal +'</li>' +
                      '<li class="list-group-item">Jumlah Data Sukses : ' + data[0].Error[0] +'</li>' +
                    '</ul>'
               );
            }
		});
    }
</script>
<?php echo $this->endSection('content'); ?>