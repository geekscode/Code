<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <title>:: Masjid Riyadhus Solihin::</title>
   
   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/default.css'); ?>">

   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
   <script src="<?php echo base_url('assets/js/jquery.validate.min.js') ?>"></script>
   <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
   <script src="<?php echo base_url('assets/default.js') ?>"></script>
</head>
<body>
   <div class="container">
      <div class="navbar">
         <div class="navbar-inner">
            <div class="nav-collapse collapse">
                     <a class="brand" href="<?php echo base_url(); ?>index.php/admin/home">
                     <span class="first animated"><?php echo $this->config->item('primary'); ?></span> <span class="second"><?php echo $this->config->item('secondary'); ?></span></a>
               <ul class="nav">
                  <li class=""><a href="<?php echo base_url();?>index.php/admin/home"><i class="icon-home icon-white"></i> Beranda</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/admin/showUser"><i class="icon-user"></i> Management User</a></li>
                  <li class="dropdown">
                     <a href="###" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-briefcase"></i> Management News <strong class="caret"></strong>
                     </a>
                     <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>index.php/admin/showKategori">Add Kategori Berita</a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/addNews">Add Berita</a></li>
                     </ul>
                  </li>
                  <li><a href=""><i></i></a></li>
               </ul>
            </div>              
            <div class="nav pull-right">
               <li class="dropdown">
                  <a href="###" class="dropdown-toggle" data-toggle="dropdown" data-test="hinge">
                     <i class="icon-bookmark icon-white" ></i>&nbsp;<?php echo $_SESSION['namalengkap']; ?>&nbsp;
                     <strong class="caret"></strong>                  
                  </a>
                     <ul class="dropdown-menu">
                        <li><a href="resume.php">Portofolio</a></li>
                        <li><a href="<?php echo base_url();?>index.php/admin/logout">Logout</a></li>
                     </ul>
               </li>                                
               <li>
                  <a href="<?php echo base_url();?>index.php/frontpage/index">
                     <i class=" icon-map-marker icon-white"></i>View Web
                  </a>
               </li>
            </div>                          
          </div>      
      </div>