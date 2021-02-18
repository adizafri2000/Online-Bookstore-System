<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "chunchunmaru");
	if (isset($_SESSION['adminEmail']) && isset($_SESSION['adminPwd']) && isset($_SESSION['admiName']))
	{
		$bgenre = $_GET['type'];
		$query = "SELECT * FROM book WHERE Genre='$bgenre'";
		$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Chunchunmaru Bookstore Manage Books - ADMIN</title>

      <link href="reset.css" rel="stylesheet" />
      <link href="admin-home.css" type="text/css" rel="stylesheet" />
    </head>
	<body>
	<?php include "admin-headerLogin.inc.php"; ?>
	<div class="container2">
		<h2><?php echo $bgenre. ' Books'?></h2>
		<?php if (isset($_GET['msg'])) { ?>
				<p class="successMsg"><?php echo $_GET['msg']; ?></p>
		<?php } ?>
		
		<?php
		echo "<table class='bTable'><tr class='bRow'><th>ISBN</th><th>Title</th><th>Author</th><th>Price</th><th>Stock</th><th>Edit</th><th>Delete</th></tr>";
				while ($row = mysqli_fetch_array($result))
				{
					$bookID = $row['ISBN'];
					$bookGenre = $row['Genre'];
					$bookData = 'bookID='. $bookID. '&bookGenre='. $bookGenre;
					echo "<tr><td>".$row["ISBN"]."</td><td>".$row["bookName"]."</td><td>".$row["authorName"]."</td><td>".$row["Price"]."</td><td class='stockCol'>".$row["Stock"]."</td>";
					echo "<td><a class='bBtn1' href='adminUpdate.php?&$bookData'>+</a></td>";
					echo "<td><a class='bBtn2' href='adminDelete.php?&$bookData'>-</a></td>";
					
				}
			
		echo "</table>"; 
		?>
	</div>
	<?php include "admin-footer.inc.php"; ?>
	</body>
</html>
<?php
	}
	else
	{
		header("Location: adminLogin.php");
		exit();
	}
	mysqli_close($connect);
?>