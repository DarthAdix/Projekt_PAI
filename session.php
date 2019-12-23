<?php
   include('connect.php');
   session_start();

   if(!isset($_SESSION['login_user'])) {
      $_SESSION['login_user'] = "none";
   }
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($polaczenie,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
?>