<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title;?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dropd.css">
</head>
<body>
<div class="navbar">
<a href="#home">beranda</a>
  <a href="#news">Tentang STTB</a>
  <a href="#news">Program</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="<?php echo site_url('Myadmin/login');?>">login</a>
    </div>
  </div> 
</div>