<?php
    if($_POST){
        include('connect.php');
        $sql = "INSERT INTO `bronie`(`kategoria_id`, `nazwa`, `opis`, `img`, `kaliber`, `pojemnosc`) VALUES ('$_POST[kategoria_id]','$_POST[nazwa]','$_POST[opis]','$_POST[img]','$_POST[kaliber]','$_POST[pojemnosc]')";
        $result = mysqli_query($polaczenie,$sql);
        header("Location: edycja_uzbrojenia.php");
    }
?>