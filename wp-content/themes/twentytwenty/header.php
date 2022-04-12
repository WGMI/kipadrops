<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo site_url() .'/wp-content/themes/twentytwenty/js/jquery-3.6.0.min.js'?>"></script>



<link href="<?php echo site_url() .'/wp-content/themes/twentytwenty/stylemain.css'?>" rel="stylesheet">
<title>Kipa Drops</title>
</head>
<body>
<header class="top-header">
  <div class="container-fluid"> 
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid justify-content-between" style="margin-top: 15px;"> 
        <!-- Left elements -->
        <div class="d-flex "> 
          <!-- Brand --> 
          <a class="navbar-brand me-5 mb-1 d-flex align-items-center" href="#"> SHOP </a> <a class="navbar-brand me-5 mb-1 d-flex align-items-center" href="#"> LEARN </a> <a class="navbar-brand me-4 mb-1 d-flex align-items-center" href="#"> SUBSCRIBE </a> </div>
        <!-- Left elements --> 
        
        <!-- Center elements -->
        <ul class="navbar-nav flex-row d-none d-md-flex">
          <li class="nav-item me-3 me-lg-1 active "> <a class="nav-link" href="#">
            <object data="<?php echo site_url() .'/wp-content/themes/twentytwenty/images/Logo.svg'?>" width="400" height="70">
            </object>
            </a> </li>
        </ul>
        <!-- Center elements --> 
        
        <!-- Right elements -->
        <div class="d-flex"> 
          <!-- Brand --> 
          <a class="navbar-brand me-5 mb-1 d-flex align-items-center" href="#"> FIND US </a> <a class="navbar-brand me-5 mb-1 d-flex align-items-center" href="#"> SEARCH </a> </div>
        <!-- Right elements --> 
      </div>
    </nav>
    <!-- Navbar --> 
    
  </div>
</header>