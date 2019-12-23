<?php
    if($_POST){
        include('connect.php');
        $sql = "UPDATE `bronie` SET `kategoria_id` = '$_POST[kategoria_id]', `nazwa` = '$_POST[nazwa]', `opis` = '$_POST[opis]', `img` = '$_POST[img]', `kaliber` = '$_POST[kaliber]', `pojemnosc` = '$_POST[pojemnosc]' WHERE `id` = $_POST[id]";
        $result = mysqli_query($polaczenie,$sql);
        header("Location: edycja_uzbrojenia.php");
    }
?>