
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School management system</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="navbar">
    <nav>
      <h1>My School</h1>

    </nav>
  </div>
  <div class="center">
    <h1>Login</h1>
    <form method="post" action="login.php">
      <div class="txt_field">
        <input type="email" required name="Email">
        <span></span>
        <label>Email</label>
      </div>
      <div class="txt_field">
        <input type="password" required name="Password">
        <span></span>
        <label>Password</label>
      </div>
      <div class="pass">Forgot Password?</div>
      <input type="submit" value="Login" name="Login">
      <div class="signup_link">
        Don't have an account? <a href="signup.php">Signup</a>
      </div>
      <?php 
if(isset($_REQUEST["err"]))
	$msg="Invalid username or Password";
?>
<p style="color:red;">
<?php if(isset($msg))
{
	
echo $msg;
}
?>

</p>
    </form>
  </div>
</body>
</html>