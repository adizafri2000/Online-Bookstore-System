<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chunchunmaru Bookstore</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <link href="reset.css" rel="stylesheet">
        <link href="searchresults.css" rel="stylesheet">
    </head>
    <body>
        <header><?php include "header.php" ?></header>
        <div id="content">
            <div id="book-results">
                <?php
                    $connect = mysqli_connect("localhost","root","","chunchunmaru");
                    if(!ctype_space($_POST['search'])){
                        $query = "select * from book where bookName LIKE '%".$_POST['search']."%'";
                        $result = mysqli_query($connect,$query);
                        $totalfound = mysqli_num_rows($result);
                        if($totalfound==0){
                            echo "No books found. Try searching for a different name.<br>";
                            $promotions = ["promotion-cooking.php","promotion-fantasy.php","promotion-health.php","promotion-horror.php","promotion-romance.php","promotion-self-help.php","promotion-thriller.php"];
                            $index = rand(0,6);
                            echo "<p id='promote'>Check out these books!</p>";
                            include $promotions[$index];
                        }
                        else{
                            echo $totalfound." result(s) found<br>";
                            while($row = mysqli_fetch_array($result)){
                                $link = "bookview.php?ISBN=".$row['ISBN'];
                                if (isset($_GET['userEmail']))
                                    $link = $link."&userEmail=".$_GET['userEmail'];
                                echo "
                                <a href='".$link."'>
                                <div id='book-row'>
                                        <div id='bookcover'><img src='images/book-cover/".$row['Genre']."/".$row['ISBN'].".jpg' width='120' height='160'></div>
                                        <div id='bookname'><p>".$row['bookName']."</p></div>
                                </div>
                                </a>
                                ";
                            }
                        }
                    }
                    else{
                        if(isset($_GET['userEmail']))
                            header("Location:home.php?userEmail=".$_GET['userEmail']."&searchstatus='0'");
                        else
                            header("Location:home.php?searchstatus='0'");
                    }
                ?>
            </div>
        </div>
        <footer><?php include "footer.inc.php"; ?></footer>
    </body>
    
</html>