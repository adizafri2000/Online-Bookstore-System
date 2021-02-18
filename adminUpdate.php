<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "chunchunmaru");
	if (isset($_SESSION['adminEmail']) && isset($_SESSION['adminPwd']) && isset($_SESSION['admiName']))
	{
		$bookID = $_GET['bookID'];
		$bookGenre = $_GET['bookGenre'];
		
		$query = "SELECT * FROM book WHERE ISBN='$bookID' AND Genre='$bookGenre'";
		$result = mysqli_query($connect, $query);
		
		while ($row = mysqli_fetch_array($result))
		{
			$bstock = $row['Stock'];
			$bprice = $row['Price'];
		}
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
	<div class="container">
		<form action="adminUpdateData.php" method="POST">
			<?php if (isset($_GET['error'])) { ?>
				<p class="errorMsg"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			<label>Stock</label>
				<input class="inputs" type="text" name="bstock" placeholder="Enter book stock" value="<?php echo $bstock; ?>">
			<label>Price</label>
				<input class="inputs" type="text" name="bprice" placeholder="Enter book price" value="<?php echo $bprice; ?>">
			<input type="hidden" name="bookID" value="<?php echo $bookID; ?>">
			<input type="hidden" name="bookGenre" value="<?php echo $bookGenre; ?>">
			<button class="btnsubmit" type="submit" name="update">Update Details</button>
		</form>
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