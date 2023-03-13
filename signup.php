<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Myschool registration</title>
   
    <link rel="stylesheet" href="signup.css" />
  </head>
  <body>
    <section class="container">
      <header><b>Myschool</b></header>
      <header>Sign Up Form</header>
      <form action="process.php" class="form" method="POST">
        <div class="input-box">
          <label>First Name</label>
          <input type="text" placeholder="Enter first name" required name="Fname"/>
        </div>

        <div class="input-box">
          <label>Last Name</label>
          <input type="text" placeholder="Last name" required name="Lname"/>
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="Email" placeholder="Enter email address" required name="Email"/>
        </div>

        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked value="Male"/>
              <label for="check-male">Male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" value="Female"/>
              <label for="check-female">Female</label>
            </div>
          </div>
        </div>

        <div class="select-box">
          <select onselect="disabledSubject(this)" name="user">
            <option hidden>User Type</option>
            <option value="Teacher">Teacher</option>
            <option value="Student">Student<option>
          </select>
        </div>
        
        <div class="column">
          <div class="select-box">
            <select multiple name="lessons[]" >
              <option hidden>Select lessons</option>
              <option value="Mathematics">Mathematics</option>
              <option value="History">History</option>
              <option value="Physics">Physics</option>
              <option value="Chemistry">Chemistry</option>
              <option value="Biology">Biology</option>
            </select>
          </div>
          <div class="select-box">
            <select multiple name="subjects[]" >
              <option hidden>Select subjects</option>
              <option value="Mathematics">Mathematics</option>
              <option value="History">History</option>
              <option value="Physics">Physics</option>
              <option value="Chemistry">Chemistry</option>
              <option value="Biology">Biology</option>
            </select>
          </div>
        </div>

        <div class="input-box address">
          <label>Password</label>
          <div class="column">
            <input type="password" placeholder="Enter Password" required name="Password"/>
            <input type="password" placeholder="Confirm Password" required name="CPassword"/>
          </div>
        </div>
        <input type="submit" value="SignUp" name="submit">
      </form>
      <div class="signup_link">
        <p>Already have an account?<a href="index.php">Login</a> </p>
      </div>
    </section>
    <script type="text/javascript">
      function disabledSubject(sub){
        
        if (sub.value=="Teacher") {
          document.getElementById('lessons').removeAttribute("disabled");
        }
      }
    </script>
  </body>
</html>
