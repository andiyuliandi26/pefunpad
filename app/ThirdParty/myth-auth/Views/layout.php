<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="viewport" content="width=576, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>/favicon.ico">

    <title>PEF x OHU</title>
    
    <link href="<?php echo base_url(); ?>/css/sb-admin-2/sb-admin-2.css" rel="stylesheet" />

    <link href="<?php echo base_url(); ?>/css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/fontawesome/css/regular.min.css" rel="stylesheet">    
    
    <script src="<?php echo base_url(); ?>/js/jquery/jquery.min.js"></script>
    
    <?= $this->renderSection('pageStyles') ?>
</head>

<body>

<main role="main" class="container">
	<?= $this->renderSection('main') ?>
</main><!-- /.container -->

<script src="<?php echo base_url(); ?>/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/js/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>/js/sb-admin-2.min.js"></script>   

<?= $this->renderSection('pageScripts') ?>
</body>
</html>
