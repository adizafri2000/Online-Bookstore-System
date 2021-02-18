<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "chunchunmaru");
	
	if (isset($_POST["update"]))
	{
		$bisbn = $_POST['bookID'];
		$genre = $_POST['bookGenre'];
		$bstock = $_POST['bstock'];
		$bprice = $_POST['bprice'];
		
		$query = "UPDATE book SET ISBN='$bisbn', Stock=$bstock, Price=$bprice WHERE ISBN='$bisbn'";
		$result = mysqli_query($connect, $query);
					
		if ($result)
		{
			header("Location: adminBGenre.php?type=$genre");
			exit();
		}
		else
		{
			header("Location: adminBGenre.php?type=$genre");
			exit();
		}
	}
	else
	{
		header("Location: adminLogin.php");
		exit();
	}
	
	mysqli_close($connect);
?>