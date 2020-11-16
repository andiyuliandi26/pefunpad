<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>
<style>
	.bg-ruangkarya {
		position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/ruangkarya/background.jpg");
        background-repeat: repeat-y;
        background-size: 100% auto;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}

	.ruangkarya-link:hover {
		transform:scale(1.1,1.1);
	}

	.poster_karya {
		max-width:300px;
		max-height: 200px;
	}
</style>
<div class="hero-wrap">
	<div class="bg-ruangkarya">
		<div class="container-page">
			<div class="row no-gutters justify-content-center  pt-md-5">
				<div class="col-md-12 ftco-animate text-center">
					<h1 class="text-center font-pef text-dark mt-3">Karya Peserta</h1>
					<h2 class=" font-pef">Kategori <?php echo $karyapeserta[0]->kategori; ?></h2>
					<h3 class="text-center text-dark mt-3 font-pef">Juara</h3>
					<div class="row justify-content-center">
						<?php
							$index = 0;
							foreach($karyapeserta as $items):?>
							<?php if(strstr($items->statuspeserta, "Juara")): ?>
								<div class="col-md-3 my-4">
									<div class="text-container px-3">
										<div class="card-body text-left">	
											<h3 class="text-center font-pef"><?= $items->statuspeserta; ?></h3>
											<h4 class="text-center"><?= $items->asalsekolah; ?></h4>
											<div class="text-left">
												<?php if($items->namatim != '')
														echo "<p class='text-center'>{$items->namatim}</p>";
													?>
												<?= $items->namapeserta; ?>
											</div>
											<?php 
												if($items->jeniskarya != 'Dokumen' && $items->imageurl != ''){
													echo "<img class='img-fluid poster_karya' src='/images/ruangkarya/{$items->imageurl}' />";
												}

												if($items->jeniskarya != 'Dokumen' && $items->videourl != ''): ?>
													<div class="iframe-container rounded-0">
														<?= generate_yt_iframe($items->videourl); ?>													
													</div>
													
												<?php endif; ?>
											
										</div>
										<div class="bg-transparent text-left">
											<div class="dropup">
												<button class="btn btn-lg ml-3 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fa far fa-comment h3"></i>
												</button>
												<div class="dropdown-menu">
												  <form class="px-4 py-3">
													<div class="form-row">													
													  <textarea rows="3" cols="30" name="" class="form-control col-md-10" id="Comment-<?= $items->id; ?>"></textarea>
														<button type="button" class="btn p-0 col-md-2" onclick="addComment(<?= $items->id; ?>)"><i class="fa fas fa-check text-success"></i></button>
													</div>
												
												
												  </form>
												</div>
											</div>
											<div class="dropup">
												<?php 	
													$getKomentar = $komentarkarya[$index];
												?>
												<button class="btn btn-lg ml-3 p-0 h6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<h6><small>Lihat semua <?= count($getKomentar); ?> komentar</small></h6>
												</button>
												<div class="dropdown-menu" style="max-height: 200px; overflow-y:scroll;">
													<div class="list-group  list-group-flush mx-2">

													<?php 
														if(count($getKomentar) > 0){
															foreach($getKomentar as $items2): ?>
																<div class='list-group-item'>
																	<p class="mb-1"><?= $items2->identitas; ?></p>
																	<small><?= $items2->comment; ?></small>
																</div>
															<?php endforeach;
														}
													?>
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							<?php endif; ?>
							
						<?php 
							$index++;
								endforeach; ?>
					</div>
					
				</div>
				<div class="col-md-12 ftco-animate text-center">
					<h3 class="text-center font-pef text-dark mt-3">Peserta</h3>
					<div class="row justify-content-center">
						<?php 
							$index2 = 0;
							foreach($karyapeserta as $items):?>
							<?php if(!strstr($items->statuspeserta, "Juara")): ?>
								<div class="col-md-3 my-4">
									<div class="text-container p-2">
										<div class="card-body text-left">
											<h3 class="text-center"><?= $items->asalsekolah; ?></h3>
											<p class="lead text-left">
												<?= $items->namapeserta; ?></p>
											<?php 
												if($items->jeniskarya != 'Dokumen' && $items->imageurl != ''){
													echo "<img class='img-fluid' src='/images/ruangkarya/{$items->imageurl}' />";
												}

												if($items->jeniskarya != 'Dokumen' && $items->videourl != ''): ?>
													<div class="iframe-container rounded-0">
														<?= generate_yt_iframe($items->videourl); ?>													
													</div>
													
											<?php endif; ?>
										</div>
										<div class="bg-transparent text-left">
											<div class="dropup">
												<button class="btn btn-lg ml-3 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fa far fa-comment h3"></i>
												</button>
												<div class="dropdown-menu">
												  <form class="px-4 py-3">
													<div class="form-row">													
													  <textarea rows="3" cols="30" name="" class="form-control col-md-10" id="Comment-<?= $items->id; ?>"></textarea>
														<button type="button" class="btn p-0 col-md-2" onclick="addComment(<?= $items->id; ?>)"><i class="fa fas fa-check text-success"></i></button>
													</div>
												
												
												  </form>
												</div>
											</div>
											<div class="dropup">
												<?php 	
													$getKomentar = $komentarkarya[$index2];
												?>
												<button class="btn btn-lg ml-3 p-0 h6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<h6><small>Lihat semua <?= count($getKomentar); ?> komentar</small></h6>
												</button>
												<div class="dropdown-menu" style="max-height: 200px; overflow-y:scroll;">
													<div class="list-group  list-group-flush mx-2">

													<?php 
														if(count($getKomentar) > 0){
															foreach($getKomentar as $items2): ?>
																<div class='list-group-item'>
																	<p class="mb-1"><?= $items2->identitas; ?></p>
																	<small><?= $items2->comment; ?></small>
																</div>
															<?php endforeach;
														}
													?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
							
						<?php 
							$index2++;
							endforeach; ?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	function addComment(karyapesertaID) {
        var komentar = $('#Comment-'+karyapesertaID).val();
        

        if (komentar == "" ) {
            alert("Komentar belum diisi.");
        } else {
            $.ajax({
                url: '<?php echo base_url()."/api/ruangkarya/addcomment";?>',
                type: 'POST',
                dataType: "json",
                data: {karyapesertaid: karyapesertaID, comment: komentar, identitas: 'Anonymous', ipaddress: '-'},
                success: function (data) {
                    if (!data.error) {
						//alert("Komentar telah ditambahkan");
						location.reload();
                    } else {
                        alert(data.data);
                    }
                }
		});
        }
    }
</script>
<?php 
	echo $this->endSection('content');
?>
