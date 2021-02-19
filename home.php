<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Chunchunmaru Bookstore</title>

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
      <link href="reset.css" rel="stylesheet">
      <link href="homestyle.css" rel="stylesheet">
   </head>

   <body>
      <header><?php include "header.php"?></header>
      <?php
         if (isset($_GET['purchase'])){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Transaction success. Redirecting to homepage');
            </script>");
         }
         else if (isset($_GET['logout'])){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Successfuly logged out. Redirecting to homepage');
            </script>");
         }
      ?>
      <div id="content">
         <div id="genre-navigation">
            <?php include "genre-navigation-bar.php";?>
         </div>

         <div id="book-promotion">
            <?php 
               $promotions = ["promotion-cooking.php","promotion-fantasy.php","promotion-health.php","promotion-horror.php","promotion-romance.php","promotion-self-help.php","promotion-thriller.php"];
               $index = rand(0,6);
               if($index+3>6){
                  include $promotions[$index--];
                  include $promotions[$index--];
                  include $promotions[$index];
               }
               else{
                  include $promotions[$index++];
                  include $promotions[$index++];
                  include $promotions[$index];
               }
            ?>
         </div>
      </div>
      <footer><?php include "footer.inc.php";?></footer>
   </body>
</html>
