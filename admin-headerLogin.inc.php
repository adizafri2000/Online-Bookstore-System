<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

<header>
<div id="header-base">
   <div id="header-top">
      <div id="header-home-hyperlink">
         <a href="adminHome.php">Chunchunmaru Bookstore</a>
      </div>
	  <div id="header-widgets">
         <nav>
            <ul>
               <li><a href="adminLogout.php"><img src="images/icons/logout.png"> Logout</a></li>
            </ul>
         </nav>
      </div>
	</div>
	<div class="header-nav">
		<a href="adminHome.php">Home</a>
	    <a href="adminAddBooks.php">Add New Books</a>
	    <div class="dropdown">
			<button class="dropbtn">Manage by Genre</button>
			<?php
			$val1 = 'Cooking';
			$val2 = 'Fantasy';
			$val3 = 'Health';
			$val4 = 'Horror';
			$val5 = 'Romance';
			$val6 = 'Self-Help';
			$val7 = 'Thriller';
			echo "<div class='dropdown-content'>";
			echo "<a href='adminBGenre.php?type=$val1'>Cooking</a>";
			echo "<a href='adminBGenre.php?type=$val2'>Fantasy</a>";
			echo "<a href='adminBGenre.php?type=$val3'>Health</a>";
			echo "<a href='adminBGenre.php?type=$val4'>Horror</a>";
			echo "<a href='adminBGenre.php?type=$val5'>Romance</a>";
			echo "<a href='adminBGenre.php?type=$val6'>Self-Help</a>";
			echo "<a href='adminBGenre.php?type=$val7'>Thriller</a>";
		    echo "</div>"; 
			?>
	    </div> 
    </div>
</div>
</header>