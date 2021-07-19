<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <title>REGISTRATION FORM</title>
    <meta charset="utf-8">
    
        <link rel="stylesheet" href="indexstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>REGISTRATION FORM</span></div>
        <form action="register.php" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="username"  placeholder="Username *" required autocomplete="off"/>
          </div>
          <div class="row">
            <i class="fas fa-envelope"></i>
            <input type="text" name="email" placeholder="Email Address *" required autocomplete="off"/>
          </div>
          <div class="row">
            <i class="fas fa-key"></i>
            <input type="password" name="password" placeholder="Password *" required autocomplete="off"/>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="confirmpassword" placeholder="Retype your Password *" required autocomplete="off"/>
          </div>
          <div class="signup-link">Already have an account?&nbsp&nbsp <a href="login.php"> LOGIN</a></div>
          <div class="row button">
            <input type="submit" name="register" value="REGISTER">
          </div>
        
        </form>
      </div>
    </div>

  </body>
</html>
