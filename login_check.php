<?php 
	include("session.php"); 
	if($_SESSION['login_user'] == "none"){
		header("location:index.php");
		die();
	}
?>

<h1>Witaj, <?php echo $login_session; ?>!</h1> 