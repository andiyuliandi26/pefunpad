<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<footer class="ftco-footer ftco-bg-dark ftco-section py-sm-3">
    <div class="container">
    <div class="row mb-3 justify-content-center text-center ">
        <div class="col-md-6 col-sm-5">
        <div class="ftco-footer-widget">
            <h2 class="font-pef footer-title mb-2">Sponsorship</h2>
            <div class="row justify-content-center mt-md-2">
                <?php
                    foreach($sponsorship as $items)
					{
                        $colWidthmd = 3;
                            $colWidthsm = 4;
						    echo "<div class='col-lg-{$items->type} col-md-{$colWidthmd} col-sm-{$colWidthsm} mt-3' data-aos='fade-zoom-in'>";
						echo "<a href='{$items->hyperlink}' target='_blank' class='mx-2'><img src='/images/sponsorship/{$items->imageurl}' alt='{$items->nama}' class='img-fluid'></a>";
                        echo "</div>";
					}
                ?>

            </div>
        </div>
        </div>
        <div class="col-md-6 col-sm-5">
        <div class="ftco-footer-widget mb-4 ml-5">
            <h2 class="font-pef footer-title mb-2">Media Partner</h2>
            <div class="row justify-content-center mt-md-2">
                    <?php
			            foreach($mediapartner as $items)
			            {
                            $colWidthmd = 3;
                            $colWidthsm = 4;
						    echo "<div class='col-lg-{$items->type} col-md-{$colWidthmd} col-sm-{$colWidthsm} mt-3' data-aos='fade-zoom-in'>";
				            echo "<a href='{$items->hyperlink}' target='_blank' class='mx-3'><img src='/images/mediapartner/{$items->imageurl}' alt='{$items->nama}' class='img-fluid'></a>";
                            echo "</div>";
			            }
                    ?>
            </div>
        </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-12 mb-4 text-center">
            <h5 class="text-white font-pef mb-2">Contact Us</h5>
            <div class="row justify-content-center" data-aos="fade-zoom-in">
                <?php foreach($socialmedia as $items): ?>
                    <div class="col-md-4 col-lg-2 col-sm-4">
                        <div class="row mb-2 justify-content-center no-gutters">
						    <div class="col-md-2 col-sm-2 pr-0">
							    <img src="/images/sosmed/<?= $items->imageurl ?>" class="img-fluid" />
						    </div>
						    <div class="col-md-9 col-sm-5 pl-1">
							    <a href="<?= $items->hyperlink ?>" target="_blank"><?= $items->nama ?></a>
						    </div>
					    </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <!--<p class="text-white mb-0">Instagram: @pef_unpad</p>
        <p class="text-white mb-0">Twitter: @pef_unpad</p>
        <p class="text-white mb-0">OA Line: @pef_unpad</p>-->
        </div>
        <div class="col-md-12 text-center">
            <p style="font-size:.7em">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="/" target="_blank">PEF x OHU UNPAD</a></p>
        </div>
        </div>
    </div>
</footer>  

      
    
  </body>
</html>