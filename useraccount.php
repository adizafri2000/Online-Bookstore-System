<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Chunchunmaru Bookstore</title>

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
      <link href="reset.css" rel="stylesheet">
      <link href="useraccount.css" rel="stylesheet">
    </head>
    <body>
        <?php
            if (isset($_GET['edit'])){
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Account edit successful!');
                </script>");
            }
        ?>
        <header><?php include "header.php"?></header>
        <?php
            if(isset($_GET['userEmail'])){
                $connect = mysqli_connect("localhost","root","","chunchunmaru");
                $query = "Select * from user where userEmail='".$_GET['userEmail']."'";
                $result = mysqli_query($connect,$query);
                $row = mysqli_fetch_array($result);
            }
        ?>
        <div id="content">
            <div id="detail-header">
                <p>Account Overview</p>
            </div>
            <div id="detail-content">
                <p>Email: <?php echo $row['userEmail'];?></p>
                <p>Username: <?php echo $row['userName'];?></p>
                <p>Address: <?php echo $row['Address'];?></p>
                <p id="account-edit"><a href="<?php echo 'accountedit.php?userEmail='.$row['userEmail'];?>">Edit Account</a></p>
            </div>
        </div>
        <footer><?php include "footer.inc.php";?></footer>
    </body>
</html>