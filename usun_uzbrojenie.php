<?php
    if($_POST){
        include('connect.php');
        $sql = "DELETE FROM `bronie` WHERE `id` = $_POST[id]";
        $result = mysqli_query($polaczenie,$sql);
        header("Location: edycja_uzbrojenia.php");
    }
?>