<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Bao Minh Preschool</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bao Minh Preschool" />
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/default/images/fav.png">
<!-- css files -->
<link href="<?php echo base_url(); ?>public/default/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>public/default/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>public/default/css/set2.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>public/default/css/imagelightbox.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>public/default/css/style.min.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- fonts -->
<script src="<?php echo base_url(); ?>public/default/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>public/default/js/bootstrap.min.js"></script>
</head>
<body>

<?php
  $this->load->view("default/top");
  $this->load->view($loadPage);
  $this->load->view("default/bottom");
 ?>
