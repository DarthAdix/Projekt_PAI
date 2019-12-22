<?php 
	$polaczenie = @mysqli_connect('localhost', 'root', '', 'pai_kowalczyk');
    	if (!$polaczenie) {
        	die('Wystąpił błąd połączenia: ' . mysqli_connect_errno());
        }
?>