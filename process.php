<?php 

    require_once('config.php');

    if(isset($_POST['submit']))
    {
        $FirstName = mysqli_real_escape_string($con,$_POST['Fname']);
        $LastName = mysqli_real_escape_string($con,$_POST['Lname']);
        $Email = mysqli_real_escape_string($con,$_POST['Email']);
        $Gender = mysqli_real_escape_string($con,$_POST['gender']);
        $User = mysqli_real_escape_string($con,$_POST['user']);

        
        
        $subjects = $_POST["subjects"];
        $subject = "";
        foreach($subjects as $row){
          $subject .= $row . ",";
        }

        $Password = mysqli_real_escape_string($con,$_POST['Password']);
        $CPassword = mysqli_real_escape_string($con,$_POST['CPassword']);

        if(empty($FirstName) || empty($Email) || empty($Password) || empty($CPassword))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            if($Password!=$CPassword)
            {
                echo ' Password Not Matched ';
            }
            else
            {
                $pass=md5($Password);
                $query = "INSERT INTO school VALUES ('','$FirstName','$LastName','$Email','$Gender','$User','$subject','$pass')";
                $result = mysqli_query($con,$query);

                if($result)
                {
                    echo ' Your Record Has Been Saved in the Database ';
                    header('Location: http://localhost/newschool/index.php');
                }
                else
                {
                    echo ' Please Check Your Query ';
                }
            }
        }
    }else
    {
        echo ' nothing ';
    }


?>