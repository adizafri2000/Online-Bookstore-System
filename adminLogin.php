<!DOCTYPE html>
<html lang="en">
	<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Chunchunmaru Bookstore</title>

      <link href="reset.css" rel="stylesheet" />
      <link href="form.css" type="text/css" rel="stylesheet" />
    </head>
	<body>
	<?php include "admin-header.inc.php"; ?>
	<div class="dform">
		<form action="adminLoginData.php" method="post">
			<h2>ADMIN LOG IN</h2>
			<?php if (isset($_GET['error'])) { ?>
				<p class="errorMsg"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			<label>Email</label>
			<input type="text" name="email" placeholder="Enter email">
			<label>Username</label>
			<input type="text" name="uname" placeholder="Enter username">
			<label>Email</label>
			<input type="password" name="pwd" placeholder="Enter password">
			<button type="submit" class="btn">Log In</button>
			<p>Not an admin? <a href="adminReg.php">Register</a></p>
		</form>
		</div>
	</body>
</html>