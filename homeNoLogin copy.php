<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Chunchunmaru Bookstore</title>

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
      <link href="reset.css" rel="stylesheet">
      <link href="homestyle copy.css" rel="stylesheet">
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
            <div id="promotion1">
               <div id="genre-title">
                  <p>Let your imagination run wild!</p>
               </div>
               <div id="genre-book-space">
                  <div id="book1">
                     <figure>
                        <img src="images/book-cover/fantasy/9780316552561.jpg" width="80" height="120">
                        <figcaption>Konosuba: God's Blessing in this Wonderful World</figcaption>
                     </figure>
                  </div>
                  <div id="book2">
                     <figure>
                        <img src="images/book-cover/fantasy/9780316552561.jpg" width="80" height="120">
                        <figcaption>Konosuba: God's Blessing in this Wonderful World</figcaption>
                     </figure>
                  </div>
                  <div id="book3">
                     <figure>
                        <img src="images/book-cover/fantasy/9780316552561.jpg" width="80" height="120">
                        <figcaption>Konosuba: God's Blessing in this Wonderful World</figcaption>
                     </figure>
                  </div>
               </div>
            </div>
            <div id="promotion2">
               
            </div>
            <div id="promotion3">
               
            </div>
         </div>
      </div>
      <footer><?php include "footer.inc.php";?></footer>
   </body>
</html>