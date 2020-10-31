<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center ">
          <div class="col-md-6">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 page-title">Sponsorship</h2>
                <div class="row justify-content-center">
                  <?php
                        foreach($sponsorship as $items)
					    {
                            //echo "<div class='container-img col-md-3' style='width:\"{$items->width}px\"; height:\"{$items->height}px\";'>";
                            echo "<div class='col-md-3'>";
						    echo "<a href='{$items->hyperlink}' target='_blank' class='mx-2'><img src='{$items->imageurl}' alt='{$items->nama}' class='img-fluid'></a>";
                            echo "</div>";
					    }
                  ?>

                </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="ftco-footer-widget mb-4 ml-5">
              <h2 class="ftco-heading-2 page-title">Media Partner</h2>
                <div class="row justify-content-center">
                      <?php
			              foreach($mediapartner as $items)
			              {
						      echo "<div class='col-md-3'>";
				              echo "<a href='{$items->hyperlink}' target='_blank' class='mx-3'><img src='{$items->imageurl}' alt='{$items->nama}' class='img-fluid'></a>";
                              echo "</div>";
			              }
                      ?>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <h5 class="text-white font-pef">Contact Us</h5>
            <p class="text-white mb-0">Instagram: @pef_unpad</p>
            <p class="text-white mb-0">Twitter: @pef_unpad</p>
            <p class="text-white mb-0">OA Line: @pef_unpad</p>
          </div>
          <div class="col-md-12 text-center">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="/" target="_blank">PEF x OHU UNPAD</a></p>
          </div>
        </div>
      </div>
    </footer>  

      <script src="<?php echo base_url(); ?>/js/popper.min.js"></script>
      <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>/js/jquery.easing.1.3.js"></script>
      <script src="<?php echo base_url(); ?>/js/jquery.waypoints.min.js"></script>
      <!--<script src="js/jquery.stellar.min.js"></script>-->
      <script src="<?php echo base_url(); ?>/js/owl.carousel.min.js"></script>
      <script src="<?php echo base_url(); ?>/js/jquery.magnific-popup.min.js"></script>
      <script src="<?php echo base_url(); ?>/js/aos.js"></script>
      <script src="<?php echo base_url(); ?>/js/jquery.animateNumber.min.js"></script>
      <script src="<?php echo base_url(); ?>/js/bootstrap-datepicker.js"></script>
      <!--<script src="js/jquery.timepicker.min.js"></script>-->
      <!--<script src="js/particles.min.js"></script>
      <script src="js/particle.js"></script>-->
      <script src="<?php echo base_url(); ?>/js/scrollax.min.js"></script>
      <!--<script src="js/video.min.js"></script>-->
      <script src="<?php echo base_url(); ?>/js/flipdown.min.js"></script>
      <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>-->
      <!--<script src="js/google-map.js"></script>-->
      <script src="<?php echo base_url(); ?>/js/main.js"></script>
    
  </body>
</html>