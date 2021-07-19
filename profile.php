
<?php

    include('config.php');
    session_start();
    error_reporting(0);

    if (!isset($_SESSION['username'])) {
        echo "<script>window.location='index.php'</script>";   
    }
    if(isset($_POST["logout"]))
    {
       echo "<script>window.location='logout.php'</script>";
    }
    $userval=$_SESSION["username"];
    $query = "SELECT * FROM `register` WHERE email='$userval'";
    $sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($sql);
    
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
  <title>PROFILE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="profilestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>PROFILE</span></div>
        <form action="#" method="post">
       <div class="card-background">
   
            <img src="user-icon.png" class="card-image">

         </div>
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="username" value="<?php  echo $row['Username']; ?>" disabled>
          </div>
          <div class="row">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" disabled>
          </div>

          <div class="row button">
            <input type="submit" name="logout" value="LOGOUT">
          </div>
        
        </form>
      </div>
    </div>


  </body>
</html>
