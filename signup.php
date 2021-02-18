<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Chunchunmaru Bookstore</title>

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
      <link href="reset.css" rel="stylesheet">
      <link href="login.css" rel="stylesheet">
    </head>
    <body>
        <header><?php include "headerNoLogin.inc.php"; ?></header>
        
        <div id="signup-form-area">
            <div id="form-title">
                <p>Rgeister new Chunchunmaru Bookstore account</p>
            </div>
            <div id="reg-form">
                <form action="home.php" method="POST">
                    Email<br>
                    <input type="email" size="30" name="userEmail" /><br>
                    Password<br>
                    <input type="password" size="30" name="userPwd"/><br>
                    Username<br>
                    <input type="password" size="30" name="userNm"/><br>
                    Address<br>
                    <input type="address" size="60" name="userAdd"/><br>
                    <input type="Sign Up" name="reg" value="Register"/>
                </form>
            </div>
            <p id="signuptext">Already a member yet? Click <a href="Login.php">here</a> to login.</p>
        </div>

        <footer><?php include "footer.inc.php"; ?></footer>
        <?php
  	require_once("connection.php");

  	if(isset($_POST['reg'])){
  		$user_email= $_POST['userEmail'];
  		$user_password= $_POST['userPwd'];
      $user_name= $_POST['userNm'];
      $user_address= $_POST['userAdd'];

  		if($user_email !="" and $user_password !="" and $user_name !="" and $user_address !=""){

  			if(mysqli_query($con, "INSERT INTO user(userEmail, userPwd, userName, Address)
  				VALUES('$user_email', '$user_password', '$user_name', '$user_address')")){

  				echo ("<script LANGUAGE='JavaScript'>
  					window.alert('Sign up successful!');
  					window.location.href='Login.php';
  				</script>");
  			}
        else{
  				echo ("<script LANGUAGE='JavaScript'>
  					window.alert('Sign up failed.');
  				</script>");
  			}

  		}else{
  			echo'<script type="text/javascript">alert("Please fill in all the boxes.")</script>';
  		}
  	}
  ?>
    </body>
</html>
