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
                
            </div>
        </div>
        <footer><?php include "footer.inc.php" ?></footer>
    </body>
</html>