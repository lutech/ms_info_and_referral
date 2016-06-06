<!doctype html>
<html style="background: transparent;">
	<head>
		<title><?php echo "Information and Referral - {$page}" ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/site.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/bootstrap-multiselect.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/content/css/prettify.css">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
		<!-- Javascript -->
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/bootstrap-multiselect.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/jquery.bootstrap.wizard.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/prettify.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>application/content/js/knockout-3.0.0.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&"></script>
		
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	</head>	
	<body>
        <!-- Main Header -->
        <?php require 'header-aa.php'; ?>
        <div id="main-body" class="container">
            <!-- Main Content -->
            <?php require "application/views/pages/{$page}.php";?>
        </div>
        <!-- Main Footer -->
        <?php require 'footer-aa.php'; ?>
        
        <!-- Main Scripts -->
		<?php require 'scripts.php'; ?>
	</body>
</html>
