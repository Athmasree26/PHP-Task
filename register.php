




<?php
session_start();
error_reporting(0);
include('config.php');


	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	
    
    if($password == $confirmpassword){
        $query = "SELECT * FROM `register` WHERE email='$email'";
		$sql = mysqli_query($conn, $query);
		if(!$sql -> num_rows > 0){
    			$query = "INSERT INTO `register`(username, email, password, confirmpassword)
    			VALUES('$username','$email', '$password', '$confirmpassword')";
				$sql = mysqli_query($conn, $query);
			if ($sql) {
        		echo "<script>alert('Registered successfully ')</script>";
				echo "<script>window.location='login.php'</script>";
				$username = " ";
				$email = " ";
				$_POST['password'] = " ";
				$_POST['confirmpassword'] = " ";
			}else{
       			 echo "<script>alert('Registration is Unsuccessful')</script>";
				echo "<script>window.location='index.php'</script>";
    		}
		}else{
			echo "<script>alert('Email already exists');</script>";
			echo "<script>window.location='index.php'</script>";
		}
    }else{
            echo '<script>alert("Password not matched,Please Verifiy");</script>';
            echo "<script type='text/javascript'> window.location = 'index.php'; </script>";
    }

?>
