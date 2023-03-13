<?php
  session_start (); 
  require_once('config.php');
  
  if(isset($_POST["Login"]))  
  {  
       if(empty($_POST["Email"]) && empty($_POST["Password"]))  
       {  
            echo '<script>alert("Both Fields are required")</script>';  
       }  
       else  
       {  
            $Email = mysqli_real_escape_string($con, $_POST["Email"]);  
            $password = mysqli_real_escape_string($con, $_POST["Password"]);  
            $password = md5($password);  
            $query = "SELECT * FROM school WHERE Email = '$Email' AND Password = '$password'";  
            $result = mysqli_query($con, $query);  
            if(mysqli_num_rows($result) > 0)  
            { 
                 session_start (); 
                 $_SESSION["Email"] = $Email;  
                 header('Location: Dashboard.php');  
            }  
            else  
            {  
                 echo '<script>alert("Wrong User Details")</script>'; 
                 header('Location: index.php?err=1'); 
            }  
       }  
  }
  else  
            {  
                 echo '<script>alert("not logged in")</script>';  
            }    

?>