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
                        if($totalfound==0)
                            echo "No books found. Try searching for a different name.<br>";
                        else{
                            echo $totalfound." result(s) found<br>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<div id='book-row'>
                                <p>".$row['bookName']."</p>
                                </div>";
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