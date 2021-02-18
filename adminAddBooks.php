<?php
	session_start();
	
	if (isset($_SESSION['adminEmail']) && isset($_SESSION['adminPwd']) && isset($_SESSION['admiName']))
	{
?>
<!DOCTYPE html>
<html lang="en">
	<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Chunchunmaru Bookstore Manage Authors - ADMIN</title>

      <link href="reset.css" rel="stylesheet" />
      <link href="admin-home.css" type="text/css" rel="stylesheet" />
    </head>
	<body>
	<?php include "admin-headerLogin.inc.php"; ?>
	<div class="container">
		<h2>ADD NEW BOOKS</h2>
		<form action="addBookData.php" method="POST">
			<?php if (isset($_GET['error'])) { ?>
				<p class="errorMsg"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			
			<label>ISBN</label>
			<?php if (isset($_GET['isbn'])) { ?>
                <input class="inputs" type="text" name="isbn" placeholder="Enter ISBN" value="<?php echo $_GET['isbn']; ?>">
            <?php }else{ ?>
                <input class="inputs" type="text" name="isbn" placeholder="Enter ISBN">
            <?php }?>
			
			<label>Book Title</label>
			<?php if (isset($_GET['btitle'])) { ?>
                <input class="inputs" type="text" name="btitle" placeholder="Enter book title" value="<?php echo $_GET['btitle']; ?>">
            <?php }else{ ?>
                <input class="inputs" type="text" name="btitle" placeholder="Enter book title">
            <?php }?>
			
			<label>Author</label>
			<?php if (isset($_GET['bauthor'])) { ?>
                <input class="inputs2" type="text" name="bauthor" placeholder="Enter book author" value="<?php echo $_GET['bauthor']; ?>">
            <?php }else{ ?>
                <input class="inputs2" type="text" name="bauthor" placeholder="Enter book author">
            <?php }?>
			
			<label>Genre</label>
			<select class="inputs2" id="genre" name="bgenre">
			  <option value="Cooking">Cooking</option>
			  <option value="Fantasy">Fantasy</option>
			  <option value="Health">Health</option>
			  <option value="Horror">Horror</option>
			  <option value="Romance">Romance</option>
			  <option value="Self-Help">Self-Help</option>
			  <option value="Thriller">Thriller</option>
			</select><br/>
			
			<label>Summary</label>
			<textarea class="inputs" name="bsummary" rows="6" cols="70" placeholder="Enter book summary"></textarea>
      
			<label>Publisher</label>
			<?php if (isset($_GET['bpublish'])) { ?>
                <input class="inputs2" type="text" name="bpublish" placeholder="Enter book publisher" value="<?php echo $_GET['bpublish']; ?>">
            <?php }else{ ?>
                <input class="inputs2" type="text" name="bpublish" placeholder="Enter book publisher">
            <?php }?>
			
			<label>Year</label>
			<?php if (isset($_GET['byearpub'])) { ?>
                <input class="inputs2" type="text" name="byearpub" placeholder="Enter book year of published" value="<?php echo $_GET['byearpub']; ?>">
            <?php }else{ ?>
                <input class="inputs2" type="text" name="byearpub" placeholder="Enter book year of published">
            <?php }?>
			
			<label>Stock</label>
			<?php if (isset($_GET['bstock'])) { ?>
                <input class="inputs" type="text" name="bstock" placeholder="Enter book stock" value="<?php echo $_GET['bstock']; ?>">
            <?php }else{ ?>
                <input class="inputs" type="text" name="bstock" placeholder="Enter book stock">
            <?php }?>
			
			<label>Price</label>
			<?php if (isset($_GET['bprice'])) { ?>
                <input class="inputs" type="text" name="bprice" placeholder="Enter book price" value="<?php echo $_GET['bprice']; ?>">
            <?php }else{ ?>
                <input class="inputs" type="text" name="bprice" placeholder="Enter book price">
            <?php }?>
			
			<button class="btnsubmit" type="submit" name="insBData">Add Book</button>
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
?>