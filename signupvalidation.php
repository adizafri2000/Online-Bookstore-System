<?php
    $connect = mysqli_connect("localhost","root","","chunchunmaru");

    //require_once("connection.php");

  	if(isset($_POST['reg'])){
  		$user_email= $_POST['userEmail'];
  		$user_password= $_POST['userPwd'];
      $user_name= $_POST['userNm'];
      $user_address= $_POST['userAdd'];
      $con = mysqli_connect("localhost","root","","chunchunmaru");

  		if($user_email !="" and $user_password !="" and $user_name !="" and $user_address !=""){

  			if(mysqli_query($con, "INSERT INTO user(userEmail, userPwd, userName, Address)
  				VALUES('$user_email', '$user_password', '$user_name', '$user_address')")){
                header("Location:login.php?signup='1'");
  			}
        else{
                header("Location:signup.php?signup='0'");
  			}

  		}else{
            header("Location:signup.php?emptyform='1'");
  		}
  	}

    
?>