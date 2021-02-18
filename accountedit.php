<!DOCTYPE html>
<html>

</html><!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Chunchunmaru Bookstore</title>

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
      <link href="reset.css" rel="stylesheet">
      <link href="accountedit.css" rel="stylesheet">
    </head>
    <body>
        <header><?php include "header.php"; ?></header>
        <?php
            $connect = mysqli_connect("localhost","root","","chunchunmaru");
            $query = "Select * from user where userEmail='".$_GET['userEmail']."'";
            $result = mysqli_query($connect,$query);
            $row = mysqli_fetch_array($result);
        ?>
        <div id="signup-form-area">
            <div id="form-title">
                <p>Edit Chunchunmaru Bookstore account</p>
            </div>
            <div id="reg-form">
                <form action="accounteditvalidation.php?currentEmail=<?php echo $row['userEmail']?>" method="POST" id="signupform">
                    Email<br>
                    <input type="email" size="30" name="userEmail" value="<?php echo $row['userEmail'] ?>"/><br>
                    Password<br>
                    <input type="password" size="30" name="userPwd" value="<?php echo $row['userPwd'] ?>"/><br>
                    Name<br>
                    <input type="text" size="30" name="userNm" value="<?php echo $row['userName'] ?>"/><br>
                    Address<br>
                    <textarea rows="3" cols="30" form="signupform" name="userAdd"><?php echo $row['Address'] ?></textarea>
                    <br>
                    <input type="submit" name="reg" value="Update"/>
                </form>
            </div>
        </div>
        <?php
          if(isset($_GET["edit"])){
            echo ("<script LANGUAGE='JavaScript'>
  					window.alert('Sign up failed. Email already exists.');
  				</script>");
          }
          else if (isset($_GET["empty"]))
          echo'<script type="text/javascript">alert("Please fill in all the boxes.")</script>';
        ?>
        <footer><?php include "footer.inc.php"; ?></footer>
    </body>
</html>
