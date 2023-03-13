<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="student.css" rel="stylesheet">
</head>
<body style="margin: 50px;">
  

<div class="container">
<?php
//session_start ();
//if(!isset($_SESSION["Email"]))
   //header("location:index.php"); 

require_once('config.php');

$sql = "SELECT * FROM school";
$results = $con->query($sql);

if (!$results) {
  die("Invalid query:" . $con->error);
}

while ($row = $results->fetch_assoc()) {
  echo "
  <div class='names'>
  <p><strong>". $row["FirstName"] ."  ". $row["LastName"] ."</strong></p>
  </div>
  <div>
  <p> I am a <b><i>". $row["User"] ."</i></b></p>
  </div>
  <p>These are my subjects</p><br>
  <p>". $row["Subjects"] ."</p>
  
  ";
}


?>
   <a href="index.php">Logout</a>
</div>
</body>
</html>