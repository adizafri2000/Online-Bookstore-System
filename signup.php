<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Chunchunmaru Bookstore</title>

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
      <link href="reset.css" rel="stylesheet">
      <link href="signup.css" rel="stylesheet">
    </head>
    <body>
        <header><?php include "headerNoLogin.inc.php"; ?></header>
        
        <div id="signup-form-area">
            <div id="form-title">
                <p>Register new Chunchunmaru Bookstore account</p>
            </div>
            <div id="reg-form">
                <form action="signupvalidation.php" method="POST" id="signupform">
                    Email<br>
                    <input type="email" size="30" name="userEmail" /><br>
                    Password<br>
                    <input type="password" size="30" name="userPwd"/><br>
                    Name<br>
                    <input type="text" size="30" name="userNm"/><br>
                    Address<br>
                    <textarea rows="3" cols="30" form="signupform" name="userAdd"></textarea>
                    <br>
                    <input type="submit" name="reg" value="Register"/>
                </form>
            </div>
            <p id="logintext">Already a member ? Click <a href="Login.php">here</a> to login.</p>
        </div>
        <?php
          if(isset($_GET["signup"])){
            $signup = $_GET["signup"];
            if(strcmp($signup,'0'))
            echo ("<script LANGUAGE='JavaScript'>
  					window.alert('Sign up failed. Email already exists.');
  				</script>");
          }
          else if (isset($_GET["emptyform"]))
          echo'<script type="text/javascript">alert("Please fill in all the boxes.")</script>';
        ?>
        <footer><?php include "footer.inc.php"; ?></footer>
    </body>
</html>
