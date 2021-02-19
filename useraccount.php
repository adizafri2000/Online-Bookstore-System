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
            <div id="detail">
                <div id="detail-header">
                    <p>Account Overview</p>
                </div>
                <div id="detail-content">
                    <p>Email: <?php echo $row['userEmail'];?></p>
                    <p>Username: <?php echo $row['userName'];?></p>
                    <p>Address: <?php echo $row['Address'];?></p>
                    <p id="account-tasks">
                        <a id="account-edit" href="<?php echo 'accountedit.php?userEmail='.$row['userEmail'];?>">Edit Account</a>
                        <a id="logout" href="home.php?logout=1">Logout</a>
                    </p>
                    
                </div>
            </div>
            <div id="purchase-history">
                <h4>Purchase History</h4>
                <?php
                    $query = "select * from Purchase where userEmail='".$row['userEmail']."'";
                    $result = mysqli_query($connect,$query);
                    $totalrow = mysqli_num_rows($result);
                    if($totalrow>0){
                        echo"
                            <table>
                                <tr>
                                    <td colspan='2'>Book Title</td>
                                    <td>Date of Purchase</td>
                                    <td>Total Bought</td>
                                    <td>Rating Given</td>
                                </tr>
                        ";
                        while($row = mysqli_fetch_array($result)){
                            $query = "select * from book where ISBN='".$row['ISBN']."'";
                            $bookdata = mysqli_query($connect,$query);
                            $bookdata = mysqli_fetch_array($bookdata);

                            $query = "select * from Rating where userEmail='".$row['userEmail']."' and ISBN='".$row['ISBN']."'";
                            $ratingdata = mysqli_query($connect,$query);
                            $ratingdata = mysqli_fetch_array($ratingdata);

                            $link = "ratingupdate.php?userEmail=".$row['userEmail']."&ISBN=".$bookdata['ISBN']."&existing=";

                            if(!isset($ratingdata['Rating'])){
                                $ratingdata = "No rating yet";
                                $link = $link."0";
                            }
                            else {
                                $ratingdata = $ratingdata['Rating']."/5";
                                $link = $link."1";
                            }

                            $link = $link."&newRating=";

                            echo"
                            <tr>
                                <td><img src='images/book-cover/".$bookdata['Genre']."/".$bookdata['ISBN'].".jpg' width='80' height='100'></td>
                                <td>".$bookdata['bookName']."</td>
                                <td>".$row['Date_Purchased']."</td>
                                <td>".$row['Total']." x RM".$bookdata['Price']." = RM".($row['Total']*$bookdata['Price'])."</td>
                                <td>".$ratingdata."
                                    <div id='rating-selection'>
                                        <p>Rate now:</p>
                                        <p>
                                            <a href='".$link."1"."'>1</a> . 
                                            <a href='".$link."2"."'>2</a> . 
                                            <a href='".$link."3"."'>3</a> . 
                                            <a href='".$link."4"."'>4</a> . 
                                            <a href='".$link."5"."'>5</a>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            ";
                        }
                        echo"</table>";

                    }
                    else{
                        //print no purchase history found
                        echo "<p id='no-record'>No purchase records found.</p>";
                    }
                ?>
            </div>
        </div>
        <footer><?php include "footer.inc.php";?></footer>
    </body>
</html>