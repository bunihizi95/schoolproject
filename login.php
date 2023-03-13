<?php
  //session_start (); 
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
               $row = $result->fetch_assoc();

               if ($row["User"]=='Student' || 'Teacher') {

                    echo "
                    <!DOCTYPE html>
                    <html>
                    <head>
                      <meta charset='UTF-8'>
                      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                      <title> Home </title>
                      <link href='student.css' rel='stylesheet'>
                    </head>
                    <body>
                    <div class='container'>
                    <div class='names'>
                    <p><strong>". $row["FirstName"] ."  ". $row["LastName"] ."</strong></p>
                    </div>
                    <div>
                    <p> I am a <b><i>". $row["User"] ."</i></b></p>
                    </div>
                    <p>These are my subjects</p><br>
                    <p>". $row["Subjects"] ."</p><br>
                    <a href='index.php'>Logout</a>
                    </div>
                    </body>
                    </html>
                     
                    ";
                    
                   // header('Location: student.php');
               }else {
                    header('Location: Dashboard.php');
               } 
                 //$_SESSION["Email"] = $Email;  
                   
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