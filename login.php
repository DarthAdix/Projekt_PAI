<html>
   
   <head>
      <title>Login Page</title>
      <?php include("header.html"); ?>    
   </head>
   
   <body>

   <?php
     include("navbar.php");
     session_start();
     $error = "";
     
     if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        
        $myusername = mysqli_real_escape_string($polaczenie, $_POST['username']);
        $mypassword = mysqli_real_escape_string($polaczenie, $_POST['password']); 
        
        $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
        $result = mysqli_query($polaczenie,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        // $active = $row['active'];
        
        $count = mysqli_num_rows($result);
        
        // If result matched $myusername and $mypassword, table row must be 1 row
        
        if($count == 1) {
           // session_register("myusername");
           $_SESSION['login_user'] = $myusername;
           
           header("location: index_logged.php");
        }else {
           $error = "Your Login Name or Password is invalid";
        }
     }
  ?>
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>User  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>