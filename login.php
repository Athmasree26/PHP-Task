<?php
include('config.php');
error_reporting(0);
session_start();

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $query = "SELECT * FROM `register` WHERE email='$email' AND password='$password'";
    $sql = mysqli_query($conn, $query);

    if($sql ->num_rows>0){
        $row = mysqli_fetch_assoc($sql);
        if($row["email"]==$email && $row["password"]==$password){
        $_SESSION['username'] = $email;
        echo "<script>alert('Login successful');</script>";
        echo "<script>window.location='profile.php'</script>";
        }
    }
  else{
        echo "<script>alert('Email or Password incorrect')</script>";
    }
}

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
  <title>LOGIN FORM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="logstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>LOGIN FORM</span></div>
        <form action="#" method="post">
          <div class="row">
            <i class="fas fa-envelope"></i>
            <input type="mail" name="email"  placeholder="Email Address *" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password *" required>
          </div>

          <div class="row button">
            <input type="submit" name="login" value="LOGIN">
          </div>
        
        </form>
      </div>
    </div>

  </body>
</html>
