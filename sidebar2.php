<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath."\Session.php";
Session::init();



spl_autoload_register(function($classes){

  include ''.$classes.".php";

});


$users = new Users();

?>
<div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="background-image:black;">
        <li class="nav-item">
          <a class="nav-link" href="index2.php">
            <i class="fas fa-fw fa-home"></i>
            <span>DASHBOARD</span>
          </a>
        </li>
       <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw  fa-cloud"></i>
            <span>SERVICES</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item " href="urns.php">URNS</a> 
            <a class="dropdown-item " href="caskets.php">CASKETS</a>
            <a class="dropdown-item " href="vehicles.php">VEHICLES</a>
          </div>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="userbus.php">
            <i class="fas fa-fw fa-bus"></i>
            <span>Vehicle</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userdriver.php">
            <i class="fas fa-fw fa-users    "></i>
            <span>Driver</span></a>
        </li>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userroute.php">
            <i class="fas fa-fw fa-car"></i>
            <span>Toll fare</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userschedule.php">
            <i class="fas fa-fw fa-clock  "></i>
            <span>credit</span></a>
          </li>
            <li class="nav-item">
          <a class="nav-link" href="userstop.php">
            <i class="fas fa fa-map-marker"></i>
            <span>Toll_booth</span></a>
          </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">