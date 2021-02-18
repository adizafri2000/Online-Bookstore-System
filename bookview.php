<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chunchunmaru Bookstore</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <link href="reset.css" rel="stylesheet">
        <link href="bookview.css" rel="stylesheet">
    </head>
    <body>
        <header><?php include "header.php" ?></header>
        <div id="content">
            <div id="genre-navigation">
                <?php include "genre-navigation-bar.php";?>
            </div>
            <?php
                if(isset($_GET['ISBN']))
                    $ISBN = $_GET['ISBN'];
            ?>
            <div id="book-section">
                <div id="book-info">
                    <div id="book-cover">
                        <?php
                            $connect = mysqli_connect("localhost","root","","chunchunmaru");
                            $query = "select * from book where ISBN=".$ISBN;
                            $result = mysqli_query($connect,$query);
                            $row = mysqli_fetch_array($result);
                            $link = "images/book-cover/".$row['Genre']."/".$ISBN.".jpg";
                        ?>
                        <img src="<?php echo $link ?>" width="210" height="270">
                    </div>
                    <div id="book-details">
                        <h4 id="book-name"><?php echo $row['bookName']; ?></h4>
                        <h5>by <?php echo $row['authorName']; ?></h5>
                        <br>
                        <p>Published by: <?php echo $row['pubName']; ?></p>
                        <p>Year published: <?php echo $row['Year_Published']; ?></p>
                        <p>ISBN: <?php echo $row['ISBN']; ?></p>
                        <p>Price: RM<?php echo $row['Price']; ?></p>
                    </div>
                </div>
                <div id="summary">
                    <h4>Summary</h4>
                    <p><?php echo $row['Summary']; ?></p>
                </div>
                <div id="adding-cart">
                    <p><?php echo $row['Stock']?> unit(s) in stock.</p>
                    
                </div>
            </div>
        </div>
        <footer><?php include "footer.inc.php" ?></footer>
    </body>
</html>