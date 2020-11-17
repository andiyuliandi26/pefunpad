<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>
<style>
	.bg-mainevent {
		position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/mainevent/background.jpg");
        background-repeat: repeat-y;
        background-size: 100% 100%;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}

    .bg-fakultas {
		position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/fakultas/background.jpg");
        background-repeat: repeat-y;
        background-size:  100% 100%;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}
</style>
<div class="container-bg">
	<img class="image-bg" src="/images/mainevent/background.png" />
	<img class="image-bg d-none d-sm-block d-md-none" src="/images/kemahasiswaan/background.jpg" />
	<div class="content-page">
        <div class="row no-gutters justify-content-center mt-md-3 mt-sm-5 main-event">
				<div class="col-md-8 text-center">
					<h2 class="h1 text-center page-title mt-3" data-aos="fade-down">Main Event</h2>
				</div>
				<div class="col-xl-8 col-md-10 col-sm-12">
                    <div class="container-bg">
						<img class="image-bg" src="/images/commingsoon_poster.png" />
					</div>
				</div>
			</div>
    </div>
</div>

<div class="modal fade" id="BukuTamuModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-0">
      <div class="modal-header bg-success border-0">
        <h5 class="modal-title text-white" id="staticBackdropLabel">Buku tamu</h5>
        <!--<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
      </div>
      <div class="modal-body bg-success subscribe-form">
            <div class="row no-gutters">
                <div class="col-md-12 my-3">
                    <div class="form-group text-dark">
                        <input type="hidden" class="form-control" value="<?= $event->id; ?>" id="EventID">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" id="NamaLengkap">
                    </div>
                </div>
                <div class="col-md-12 my-3">                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" id="Email">
                    </div>
                </div>
                <div class="col-md-12 my-3">                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nomor Handphone" id="NoHP">
                    </div>
                </div>
                <div class="col-md-12 my-3">                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Asal Sekolah" id="AsalSekolah">
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer bg-success">
        <button type="button" class="btn btn-dark" onclick="submitBukuTamu()">Submit</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		$('#BukuTamuModal').modal('show');
    });

    function submitBukuTamu() {
        var eventid = $('#EventID').val();
        var nama = $('#NamaLengkap').val();
        var email = $('#Email').val();
        var nohp = $('#NoHP').val();
        var asalsekolah = $('#AsalSekolah').val();

        if (nama == "" || email == "" || nohp == "" || asalsekolah == "") {
            alert("Pengisian buku tamu belum lengkap.");
        } else {
            $.ajax({
                url: '<?php echo base_url()."/api/mainevent/create";?>',
                type: 'POST',
                dataType: "json",
                data: {eventid: eventid, namatamu: nama, email: email, nohp:nohp, asalsekolah:asalsekolah},
                success: function (data) {
                    if (!data.error) {
                        $('#BukuTamuModal').modal('hide');
                    } else {
                        alert(data.data);
                    }
                }
		});
        }
    }
</script>
<?php echo $this->endSection('content'); ?>