<?php 
	echo $this->extend('/layouts/main');
    echo $this->section('content');
?>
<style>
	@media (orientation: landscape) {
		.bg-kemahasiswaan {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			background-image: url("/images/kemahasiswaan/background.jpg");
			background-repeat: repeat-y;
			background-size: 100%;
		}
	}

	@media (orientation: portrait) {
		.bg-kemahasiswaan {
			position: relative;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			opacity: 1;
			/*background-position: center;*/
			background-image: url("/images/kemahasiswaan/background-portrait.jpg");
			background-repeat: repeat-y;
			background-size: 100%;
		}
	}

</style>

<div class="bg-kemahasiswaan">
	<div class="container-page">
		<div class="row justify-content-center mt-md-3 mt-3 main-event">
			<div class="col-md-12 col-sm-12 ftco-animate text-center">
				<h2 class="h1 text-center page-title text-dark">Lembaga Kemahasiswaan</h2>				
			</div>
			<div class="col-md-10 col-mb-12 text-center mb-4">
				<div class="card">
					<div class="card-body">									
						<h4 class="font-pef">Paguyuban</h4>
						<div class="row mt-2 justify-content-center">
							<div class="col-md-8">
								<div class="video-container mt-3 mb-3">
									<div class="iframe-container">
										<?= generate_yt_iframe('-Niwe1oIYUw'); ?>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row text-left font-weight-bold">
							<div class="col-md-4 col-mb-4 ">
								<ul><li>HIKMI</li><li>PAMASAGI </li><li>PRIME</li><li>KOMPAS </li><li>IKMM<br></li><li>GAMABAN<br></li><li>KMC<br></li><li>GAMAKU<br></li><li>KORAN<br></li><li>KMKB<br></li><li>PKMT</li></ul>
							</div>
							<div class="col-md-4 col-mb-4">
								<ul><li>WARTA<br></li><li>IKMAPA<br></li><li>KEMASS<br></li><li>KOASI<br></li><li>KMP<br></li><li>PADJADJAVA<br></li><li>MUSI<br></li><li>KAKABAN<br></li><li>RANUP<br></li><li>AMPERA<br></li><li>HIMAMIRA</li></ul>
							</div>
							<div class="col-md-4 col-mb-4">
								<ul><li>GAWAREBON<br></li><li>PAMATEN<br></li><li>HIMAJA<br></li><li>PUB<br></li><li>KMN<br></li><li>KWACI<br></li><li>BANGBARA<br></li><li>CILACAP<br></li><li>COMMEL<br></li><li>KMBU<br></li><li>SOMBA<ul></ul></li></ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-10 col-mb-12 text-center">
				<div class="card">
					<div class="card-body">									
						<h4 class="font-pef">UKM & BSO</h4>
						<div class="row mt-2 justify-content-center">
							<div class="col-md-8">
								<div class="video-container mt-3 mb-3">
									<div class="iframe-container">
										<?= generate_yt_iframe('IOC7lOeU6ps'); ?>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row text-left font-weight-bold">
							<div class="col-md-12 col-mb-12 text-center">
								<h4 class="font-pef">BSO</h4>
							</div>
							<div class="col-md-6 col-mb-6 ">
								<ul><li>Student Energy<br></li><li>KABIM<br></li><li>Archery<br></li><li>FPCI<br></li><li>Girl Up<br></li><li>KSE<br></li><li>Radio Unpad</li><li>Radio MU</li></ul>
							</div>
							<div class="col-md-6 col-mb-6">
								<ul><li>Warta Kema</li><li>Tenis Lapangan</li><li>Kopma Unpad</li><li>PMK Unpad</li><li>KMK Unpad</li><li>SYAMIL Unpad</li><li>KMBD Unpad</li><li>KMH Brahmacari Unpad</li></ul>
							</div>
						</div>

						<div class="row text-left font-weight-bold mt-4">
							<div class="col-md-12 col-mb-12 text-center">
								<h4 class="font-pef">UKM</h4>
							</div>
							<div class="col-md-6 col-mb-6 ">
								<ul><li>Pramuka Unpad<br></li><li>Unit SAR Unpad<br></li><li>Spektrum Unpad<br></li><li>Unit Bridge Unpad<br></li><li>KSR PMI Unit Unpad<br></li><li>PMPA Palawa Unpad<br></li><li>Perisai Diri (PDUP)<br></li><li>Shorinji Kempo Unpad<br></li><li>Unit KarateUnpad (UKU)<br></li><li>Resimen Mahasiswa Unpad</li></ul>
							</div>
							<div class="col-md-6 col-mb-6">
								<ul><li>Kiryokukai Aikido Unpad<br></li><li>Unit Hoki Unpad (UHU)<br></li><li>Unit Renang Unpad (URU)<br></li><li>Merpati Putih Unpad (MPUP)<br></li><li>Unit Bola Voli Unpad (UBVU)<br></li><li>Unit Taekwondo Unpad (UTKD)</li><li>UKM Tenis Meja Unpad (UTMU)<br></li><li>Unit Sepak Bola Unpad (USBU)<br></li><li>Lingkungan Seni Sunda (LISES)</li></ul>			
							</div>
							<div class="col-md-6 col-mb-6 ">
								<ul><li>Unit Bola Basket Unpad (UBBU)<br></li><li>Unit Bulu Tangkis Unpad (UBTU)<br></li><li>Unit Flag Football Unpad (UFFU)<br></li><li>Unit Tarung Derajat Unpad (UTDU)<br></li><li>Unit Catur Mahasiswa Unpad (UCMU)<br></li><li>Unit Baseball Softball Unpad (UBSU)</li></ul>
							</div>
							<div class="col-md-6 col-mb-6">
								<ul><li>Padjadjaran Ensemble Community (PEC)<br></li><li>Unit Pecinta Budaya Minangkabau (UPBM)<br></li><li>Korps Protokoler Mahasiswa Unpad (KPM)<br></li><li>Sadaluhung Padjadjaran Drum Corps (SPDC)<br></li><li>Paduan Suara Mahasiswa Unpad (PSM Unpad)<br></li><li>English Speaking Union Unpad (ESU Unpad)</li></ul>	
							</div>
							<div class="col-md-12 col-mb-12">
								<ul><li>Gelanggang Seni Sastra Teater dan Film (GSSTF)<br></li><li>Lembaga Pengkajian dan Pengabdian Masyarakat Demokratis (LPPMD)<br></li><li>IAAS LC Unpad (International Association of Students in Agricultural and Related Sciences)<br></li><li>AIESEC Unpad (Association Internationale des Etudiants en Sciences Economiques et Commerciales)</li></ul>	
							</div>
						</div>
					</div>
				</div>
				
				<!--<div class="container-bg">
					<img class="image-bg" src="/images/commingsoon_poster.png" />
				</div>-->
			</div>		
		</div>
	</div>
</div>

<?php echo $this->endSection('content'); ?>