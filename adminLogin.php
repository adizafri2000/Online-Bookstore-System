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
			<?php if (isset($_GET['email'])) { ?>
                <input type="text" name="email" placeholder="Enter email" value="<?php echo $_GET['email']; ?>">
            <?php }else{ ?>
                <input type="text" name="email" placeholder="Enter email">
            <?php }?>
			<label>Username</label>
			<?php if (isset($_GET['uname'])) { ?>
                <input type="text" name="uname" placeholder="Enter username" value="<?php echo $_GET['uname']; ?>">
            <?php }else{ ?>
                <input type="text" name="uname" placeholder="Enter username">
            <?php }?>
			<label>Password</label>
			<input type="password" name="pwd" placeholder="Enter password">
			<button type="submit" name="login" class="btn">Log In</button>
		</form>
		</div>
	</body>
</html>
