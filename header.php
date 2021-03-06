<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href="headerstyle.css" rel="stylesheet">

<div id="header-base">
   <div id="header-top">
      <div id="header-home-hyperlink">
         <a href="<?php 
            if(isset($_GET['userEmail']))
               echo "home.php?userEmail=".$_GET['userEmail'];
            else echo "home.php";
         ?>">Chunchunmaru Bookstore</a>
      </div>
      <div id="header-widgets">
         <nav>
            <ul>
               <li>
                  <?php
                     if(isset($_GET['userEmail']))
                        echo "<a href=useraccount.php?userEmail=".$_GET['userEmail']."><img src='images/icons/user-24.png'>My Account</a>";
                     else echo "<a href='login.php'><img src='images/icons/user-24.png'> Sign Up/Login</a>";
                  ?>
               </li>
               <?php
                  if(isset($_GET['userEmail'])){
                     $link = "checkout.php?userEmail=".$_GET['userEmail'];
                  }
                  else
                     $link = "login.php";
               ?>
               <li><a href="<?php echo $link; ?>">
                  <img src="images/icons/cart-24.png"> Cart
                  <span id="cart-total-item"></span>
               </a></li>
            </ul>
         </nav>
      </div>
   </div>
   <div id="header-search">
      <?php 
         $link = "searchresults.php";
         if (isset($_GET['userEmail']))
            $link = $link."?userEmail=".$_GET['userEmail'];
      ?>
      <form id="search-bar" action="<?php echo $link; ?>" method="POST">
         <input type="text" size="40" placeholder="Search for book title" name="search">
         <button type="submit"><img src="images/icons/search-16.png"></button>
         <?php 
            if(isset($_GET['searchstatus'])){
               if(strcmp($_GET['searchstatus'],'0')){
                  echo "<p style='color:red;'>Searched text cannot be empty</p>";
               }
            }
         ?>
      </form>
   </div>
</div>