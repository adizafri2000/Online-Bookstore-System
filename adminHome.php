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
      <title>Chunchunmaru Bookstore Homepage - ADMIN</title>

      <link href="reset.css" rel="stylesheet" />
      <link href="admin-home.css" type="text/css" rel="stylesheet" />
    </head>
	<body>
	<?php include "admin-headerLogin.inc.php"; ?>
	<div id="content">
		<h1>Hello, Mr/Ms <?php echo $_SESSION['admiName']; ?>!</h1>
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