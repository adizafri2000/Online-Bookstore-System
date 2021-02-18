<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "chunchunmaru");
	$isbn = $_GET['bookID'];
	$bgenre = $_GET['bookGenre'];
	
	
	$query = "DELETE FROM book WHERE ISBN='$isbn'";
	$result = mysqli_query($connect, $query);
	
	if ($result) 
	{
		header("Location: adminBGenre.php?msg=Book is deleted successfully!&type=$bgenre");
		exit();
	}
	else 
	{
		header("Location: adminBGenre.php?type=$bgenre");
		exit();
	}	
				
	mysqli_close($connect);
?>