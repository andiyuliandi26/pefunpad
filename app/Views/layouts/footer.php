<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<footer class="ftco-footer ftco-bg-dark ftco-section py-sm-3">
    <div class="container">
        <div class="row mb-3 justify-content-center text-center ">
        <div class="col-md-6 col-sm-12 mb-sm-5">
            <div class="ftco-footer-widget">
                <h2 class="font-pef footer-title mb-2">Sponsorship</h2>
                <div class="row justify-content-center mt-md-2">
                    <?php
                        foreach($sponsorship as $items)
					    {
                            $colWidthmd = 3;
                            $colWidthsm = 2;
						    echo "<div class='col-lg-{$items->type} col-md-{$colWidthmd} col-sm-{$colWidthsm} mt-3' data-aos='fade-zoom-in'>";
						    echo "<a href='{$items->hyperlink}' target='_blank' class='mx-2'><img src='/images/sponsorship/{$items->imageurl}' alt='{$items->nama}' class='img-fluid'></a>";
                            echo "</div>";
					    }
                    ?>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 mt-sm-3">
            <div class="ftco-footer-widget mb-4 ml-md-5">
                <h2 class="font-pef footer-title mb-2">Media Partner</h2>
                <div class="row justify-content-center mt-md-2">
                        <?php
			                foreach($mediapartner as $items)
			                {
                                $colWidthmd = 3;
                                $colWidthsm = 2;
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
            <h5 class="text-white font-pef mb-3">Contact Us</h5>
            <div class="row justify-content-center" data-aos="fade-zoom-in">
                <?php foreach($socialmedia as $items): ?>
                    <div class="col-md-1 col-lg-1 col-sm-2 mx-1" style="max-width:3.5em;">
                        <a href="<?= $items->hyperlink ?>" target="_blank" class="card-link stretched-link" data-toggle="tooltip" data-placement="bottom" title="<?= $items->nama ?>">
                            <img src="/images/sosmed/<?= $items->imageurl ?>" class="img-fluid"/>
                            <!--<div class="row mb-2 justify-content-center no-gutters align-items-center">
						        <div class="col-md-1 col-sm-2 pr-0">
							        
						        </div>-->
						        <!--<div class="col-md-9 col-sm-5 pl-3 text-left">
							        
						        </div>-->
					        <!--</div>-->
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <p style="font-size:.7em">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="/" target="_blank">PEF x OHU UNPAD</a></p>
        </div>
        </div>
    </div>
</footer>  
>