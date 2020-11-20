<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>
<style>
	@media (orientation: landscape) {
		.bg-merchandise {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			background-image: url("/images/merchandise/background.jpg");
			background-repeat: repeat-y;
			background-size: 100%;
		}
	}

	@media (orientation: portrait) {
		.bg-merchandise {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			/*background-position: center;*/
			background-image: url("/images/merchandise/background-portrait.jpg");
			background-repeat: repeat-y;
			background-size: 100%;
		}
	}

/*	.bg-merchandise {
		position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/merchandise/background.jpg");
        background-repeat: repeat-y;
        background-size:  100%;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}*/

		.bg-merchandise .container-page {
			padding-bottom:50px;
		}
</style>
<div class="bg-merchandise">
	<div class="container-page">
		<div class="row no-gutters justify-content-center main-event mt-md-2">
			<div class="col-lg-8 col-md-12 col-sm-12 ftco-animate text-center">
				<h2 class="h1 text-center page-title text-danger mt-2">Merchandise</h2>
				<div class="row justify-content-between">
					<?php foreach($merchandise as $items): ?>
						<div class="col-lg-3 col-md-3 col-mb-4 col-sm-4">
							<img class="img-fluid" src="/images/merchandise/<?php echo $items->imageurl; ?>?>" alt="<?php echo $items->namaproduk; ?>" />
							<p class="lead text-danger font-weight-bold mb-0"> <?php echo $items->namaproduk; ?></p>
							<h5 class="h5 text-danger mb-2"> Rp. <?php echo $items->harga; ?></h5>
							<button class="btn btn-danger" onclick="openModal(<?= $items->id; ?>)">Buy</button>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="row justify-content-center mt-5">
					<div class="col-md-8">
						<div class="video-container">
							<div class="iframe-container">
								<?= generate_yt_iframe('-Nn07iwCXuw'); ?>
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="merchdetail" data-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content border-0">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Beli di Market place</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row no-gutters justify-content-between" id="marketList">
                <div class="col-md-12 my-3">
                </div>
            </div>
      </div>
    </div>
  </div>
</div>

<script>
	function openModal(mercID) {

		$.ajax({
            url: '<?php echo base_url()."/api/merchandise/getmarketplace";?>' + '/' + mercID,
            type: 'GET',
            dataType: "json",
            //data: {eventid: eventid, namatamu: nama, email: email, nohp:nohp, asalsekolah:asalsekolah},
			success: function (data) {
				var appendText = '';
				if (!data.error) {
					if (data.length > 0) {
						for (var i = 0; i < data.length; i++) {
							appendText += '<div class="col-md-2 col-sm-2 col-mb-2 my-3 mr-3"><a href="' + data[i].hyperlink + '" target="_blank"><img class="img-fluid" src="/images/marketplace/'+ data[i].marketicon +'" alt="' + data[i].namamarketplace + '"/></a></div>';
						}
						
					}
					$('#marketList').empty().append(appendText);
					$('#merchdetail').modal('show');
					//console.log(appendText);
                    //$('#BukuTamuModal').modal('hide');
                } else {
                    alert(data.data);
                }
            }
		});
		
	}

</script>
<?php echo $this->endSection('content'); ?>