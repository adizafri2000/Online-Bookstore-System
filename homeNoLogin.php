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
      <header><?php include "headerNoLogin.inc.php"; ?></header>
      <div id="content">
         <div id="genre-navigation">
            
            <div id="genre-bar">
               <div id="bar-header">
                  <p>Browse by genre</p>
               </div>
               <div id="bar-contents">
                  <ul>
                     <li><a href="#">Cooking</a></li>
                     <li><a href="#">Fantasy</a></li>
                     <li><a href="#">Horror</a></li>
                     <li><a href="#">Romance</a></li>
                     <li><a href="#">Health</a></li>
                     <li><a href="#">Self-Help</a></li>
                     <li><a href="#">Thriller</a></li>
                  </ul>
               </div>
            </div>
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
