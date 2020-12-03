<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>
<style>
	@media (orientation: landscape) {
		.bg-fakultas {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			background-image: url("/images/fakultas/background-full.png");
			background-repeat: repeat-y;
			background-size: 100%;
		}
	}

	@media (orientation: portrait) {
		.bg-fakultas {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			/*background-position: center;*/
			background-image: url("/images/fakultas/background-portrait.jpg");
			background-repeat: repeat-y;
			background-size: 100%;
		}
	}

	/*.bg-fakultas {
		position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        opacity: .97;
        background-image: url("/images/fakultas/background-long.png");
        background-repeat: repeat-y;
        background-size:  100%;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#448ef6', endColorstr='#af05a9', GradientType=1 );
	}
*/

		.bg-fakultas .img-fluid {
			border-radius:10px;
		}

	/*.image-link .img-fluid {
		opacity:1;
		transition:.5s ease;
	}

	.image-link:hover{
		opacity:0.5;
		transition:.5s ease;
	}*/
	.image-overlay {
	  transition: .5s ease;
	  opacity: 0;
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
	  text-align: center;
	}

	.image-link:hover .img-fluid {
	  opacity: 0.5;
	}

	.image-link:hover .image-overlay {
	  opacity: 1;
	}

	.image-text-overlay {
	  background-color: #4CAF50;
	  color: white;
	  font-size: 16px;
	  padding: 16px 32px;
	}
</style>

<div class="bg-fakultas">
	<div class="container-page">
		<div class="row no-gutters justify-content-center pt-md-5 mb-5">
			<div class="col-md-12 text-center">
				<h2 class="h2 text-center font-pef  mt-3 text-danger">Fakultas</h2>
				<div class="row justify-content-center pt-3">

					<?php
						$index = 1;
						foreach($fakultas as $items): ?>							
							<a class="col-md-2 col-sm-2 col-mb-3 my-3 px-sm-2 mx-xs-2 image-link" href="/fakultas/detail/<?= $items->id; ?>">
								<img class="img-fluid" src="/images/fakultas/<?php echo $items->imageurl; ?>" alt="<?php echo $items->singkatan; ?>" />
									<div class="image-overlay">
									<div class="image-text-overlay"><?= $items->singkatan ?></div>
									</div>
							</a>
					<?php  $index++; endforeach; ?>
				</div>
			</div>
			<div class="col-md-12 text-center">
				<h2 class="h2 text-center font-pef mt-5 text-danger">Markipad</h2>
				<h4 class="h4 text-center font-pef mt-1 text-danger">Mari Kita Kenalan dengan Unpad</h4>
			</div>
			<div class="col-md-12 text-center">
				<!--<div id="player1"></div>
				<div id="player2"></div>
				<div id="player3"></div>-->
				<div class="card bg-dark">
					<div class="card-body">
						<div class="row justify-content-center">
							<?php
								$index = 1;
							foreach($markipad as $items): 
											
							?>
								<div class="col-md-3 col-mb-6 my-3">
									<div class="iframe-container rounded-0">
										<?= generate_yt_iframe($items->videourl); ?>
										<!--<div id="player<?= $index; ?>"></div>-->
										<!--<iframe class="responsive-iframe" src="<?= $items->videourl; ?>?controls=2" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
													
									</div>
									<p class="lead text-white mb-0"><?= $items->namavideo;?></p>
								</div>
							<?php 
								$index++;
							endforeach; ?>

							<!--<div class="col-md-12">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLNHAvFWRbdAydbr9RLnHVqrZVb_rtHb9A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--<div class="container-bg d-none d-md-block d-sm-block d-lg-none">
	<img class="image-bg" src="/images/fakultas/background.jpg" />
	<img class="image-bg" src="/images/fakultas/background.jpg" style="transform:rotate(180deg);"/>
	<img class="image-bg" src="/images/fakultas/background.jpg""/>
	<div class="content-page">
		<div class="row no-gutters justify-content-center mt-md-5 mt-4 main-event">
			<div class="col-md-12 col-sm-12ftco-animate text-center">
				<h2 class="h1 text-center page-title text-danger mb-sm-0">Fakultas</h2>
				<div class="row no-gutters justify-content-center px-sm-2">
					<?php
					$index = 1;
					foreach($fakultas as $items): ?>	
						<a class="col-md-2 col-sm-2 my-3 px-sm-2 image-link" href="/fakultas/detail/<?= $items->id; ?>">
							<img class="img-fluid" src="/images/fakultas/<?php echo $items->imageurl; ?>" alt="<?php echo $items->singkatan; ?>" />
						</a>
					<?php 
						$index++;	
						endforeach; ?>
				</div>
					
				<h2 class="h1 text-center page-title mt-5 text-danger">Markipad</h2>
				<h4 class="h4 text-center font-pef mt-1 text-danger">Mari Kita Kenalan dengan Unpad</h4>
					<div class="row justify-content-center">
						<div class="col-sm-12">-->
							<!--<div id="player1"></div>
							<div id="player2"></div>
							<div id="player3"></div>-->
							<!--<div class="card bg-dark">
								<div class="card-body">
									<div class="row justify-content-center">
										<?php
											$index = 1;
										foreach($markipad as $items): 
											
										?>
											<div class="col-sm-3 my-3">
												<div class="iframe-container">
													<?= generate_yt_iframe($items->videourl); ?>-->
													<!--<div id="player<?= $index; ?>"></div>-->
													<!--<iframe class="responsive-iframe" src="<?= $items->videourl; ?>?controls=2" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
												<!--</div>
											</div>
										<?php 
											$index++;
										endforeach; ?>-->

										<!--<div class="col-md-12">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLNHAvFWRbdAydbr9RLnHVqrZVb_rtHb9A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>-->
									<!--</div>
								</div>
							</div>
						</div>
						
					</div>
			</div>
		</div>
	</div>
</div>-->

<?php
	$index2 = 1;
	foreach($fakultas as $items): 
?>
<div class="modal fade" id="modal<?= $index2; ?>" tabindex="-1" aria-labelledby="myModalLabel<?= $index2; ?>" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel<?= $index2; ?>"><?= $items->nama; ?></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mb-0 p-0">
				<div class="row">
					<div class="col-md-12 mx-3">
						<?= $items->deskripsi; ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php 
	$index2++;	
	endforeach; 
?>

<!--<script>	
	function loadData() {
		var arrayVideo = [];
		$.ajax({
            url:'<?php echo base_url()."/api/markipad";?>',
            type: 'POST',
            dataType: "json",
            success: function (data) {
                if(!data.error){
					//console.log(playerInfoList);
					//playerInfoList.empty();
					//console.log(playerInfoList);
					var index = 1;
					for (var i = 0; i < data.length; i++) {
						index = index + i;
						var videoObj = {
							id: 'player' + index,
							videoId: data[i].videourl
						};

						//arrayVideo[i] = videoObj;
						arrayVideo.push({
							id: 'player' + index,
							videoId: data[i].videourl
						});
					}
                }
            }
		});
		console.log(arrayVideo);
		return arrayVideo;
	}

	function onYouTubeIframeAPIReady() {
		//console.log(playerInfoList);
		//playerInfoList = loadData();
		//console.log(playerInfoList);
		//if (typeof playerInfoList === 'undefined') return;
		
		console.log('onYouTubeIframeAPIReady');
		//console.log(playerInfoList);
		//console.log(playerInfoList.length);
		//if (playerInfoList.length > 0) {
		//	console.log('onYouTubeIframeAPIReady 2');
		//	for (var i = 0; i < playerInfoList.length; i++) {
		//		var curplayer = createPlayer(playerInfoList[i]);
		//		console.log(playerInfoList[i]);
		//		players[i] = curplayer;
		//	}
		//}

		initVideos();
	}

	//var players = new Array();

	function createPlayer(playerInfo) {
		return new YT.Player(playerInfo.id, {

			videoId: playerInfo.videoId,
		});
	}

	function initVideos() {
		var playerInfoList = loadData();
		for (var i = 0; i < playerInfoList.length; i++) {
			console.log(playerInfoList[i]);
            var player = playerInfoList[i];
            var pl = new YT.Player(player.id, {
                height: '390',
                width: '640',
                videoId: player.videoId,
            });
            window[player.Id] = pl;
        }
    }
</script>-->
<!--<script>
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);



	function onYouTubeIframeAPIReady() {
		var totalData = 0;
		var playerInfoList = [];

		$.ajax({
            url:'<?php echo base_url()."/api/markipad";?>',
            type: 'POST',
            dataType: "json",
            success: function (data) {
				if (!data.error) {
					totalData = data.length;					var index = 1;
					for (var i = 0; i < data.length; i++) {
						var index2 = index + i;
						//console.log(index2);
						var videoObj = {
							id: 'player' + index2,
							videoId: data[i].videourl
						};

						playerInfoList.push(videoObj);

					}
					
					if (typeof playerInfoList === 'undefined') console.log('Error');

					for (var i = 0; i < totalData; i++) {
						var curplayer = createPlayer(playerInfoList[i]);
						players[i] = curplayer;
					}
					console.log(totalData);
                }
            }
		});
	}

var players = new Array();

function createPlayer(playerInfo) {
	return new YT.Player(playerInfo.id, {

		videoId: playerInfo.videoId,
	});
}

	function loadData() {
		var arrayVideo = [];
		$.ajax({
            url:'<?php echo base_url()."/api/markipad";?>',
            type: 'POST',
            dataType: "json",
            success: function (data) {
                if(!data.error){
					//console.log(playerInfoList);
					//playerInfoList.empty();
					//console.log(playerInfoList);
					var index = 1;
					for (var i = 0; i < data.length; i++) {
						var index2 = index + i;
						//console.log(index2);
						var videoObj = {
							id: 'player' + index2,
							videoId: data[i].videourl
						};

						arrayVideo[i] = videoObj;
						
						  //arrayVideo.push(videoObj);

						//arrayVideo.push({
						//	id: 'player' + index2,
						//	videoId: data[i].videourl
						//});
					}
                }
            }
		});
		//console.log(arrayVideo);
		return arrayVideo;
	}

	$(document).ready(function () {
		//playerInfoList = loadData();
		$('#stop').click(function () {
			//loop players array to stop them all
		$(players).each(function (i) {
			console.log(this);
			this.stopVideo();
		});
	});
})
	</script>-->
<?php echo $this->endSection('content'); ?>