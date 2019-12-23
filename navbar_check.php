<?php 
  include('session.php');
  if($_SESSION['login_user'] != "none"){
    include 'navbar_logged.php';
  } else {
  	include 'navbar.php';
  }
?>