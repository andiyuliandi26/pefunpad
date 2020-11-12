<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PEF x OHU Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="<?php echo base_url(); ?>/css/sb-admin-2/sb-admin-2.css" rel="stylesheet" />

    <link href="<?php echo base_url(); ?>/css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/fontawesome/css/regular.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/summernote/summernote-bs4.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>/js/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/sb-admin-2.min.js"></script>   
    <script src="<?php echo base_url(); ?>/js/summernote/summernote-bs4.min.js"></script>   
  </head>
  <body>
      <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion shadow toggled" id="accordionSidebar">
            
            <li class="nav-item active">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                    <div class="sidebar-brand-icon">
                        <img src="<?php echo base_url(); ?>/images/homepage/burung.png" height="50" class="align-top" alt="">
                    </div>                
                </a>
            </li>
            <!-- Sidebar - Brand -->        

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <?php echo $this->include('/admin/layouts/sidenav') ?>
            
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-gradient-primary topbar mb-4 static-top shadow">
                     <?php echo $this->include('/admin/layouts/topnav') ?>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid mb-4">
                    <?php
                        if(session()->getFlashData('success')){
                    ?>
                        <div class="row">
                            <div class="col-md-6">                            
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashData('success') ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                        echo $this->renderSection('content') 
                    ?>
                </div>
                <!-- /.container-fluid -->

            </div>
        </div>
        </div>
      <script>
          $(document).ready(function () {
              
	            $('[data-toggle="tooltip"]').tooltip();

          });
      </script>
    </body>
</html>