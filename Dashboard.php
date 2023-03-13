<?php
 //session_start();
 //session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
  <h1>My Data</h1>

  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>User</th>
        <th>Subjects</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
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
          echo "<tr>
          <td>". $row["id"] ."</td>
          <td>". $row["FirstName"] ."</td>
          <td>". $row["LastName"] ."</td>
          <td>". $row["Email"] ."</td>
          <td>". $row["User"] ."</td>
          <td>". $row["Subjects"] ."</td>
          <td>
            <a class='btn btn-primary btn-sm' href='update'>Update</a>
          </td>
          </tr>";
        }

        
      ?>
    </tbody>
  </table>
  <a href="index.php">Logout</a>
</body>
</html>