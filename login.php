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
        
        <div id="login-form-area">
            <div id="form-title">
                <p>Log in to your Chunchunmaru Bookstore account</p>
            </div>
            <div id="real-form">
                <form action="loginvalidation.php" method="POST">
                    Email<br>
                    <input type="text" size="30" name="userEmail" /><br>
                    Password<br>
                    <input type="password" size="30" name="userPwd"/><br>
                    <input type="submit" />
                    
                    <?php 
                        if(isset($_GET['success']))
                            echo "<p style='font-size: 0.8em;color:red;text-align:center;'>Email/Password does not exist.</p>";
                        else if (isset($_GET['signup'])){
                            echo ("<script LANGUAGE='JavaScript'>
                            window.alert('Sign up successful!');
                            </script>");
                        }
                    ?>
                </form>
            </div>
            <p id="signuptext">Not a member yet? Click <a href="signup.php">here</a> to sign up.</p>
            <p id="adminlogintext">Admin? Click <a href="adminLogin.php">here</a> to login.</p>
        </div>

        <footer><?php include "footer.inc.php"; ?></footer>
    </body>
</html>
