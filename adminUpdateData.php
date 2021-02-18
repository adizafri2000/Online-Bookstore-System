<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "chunchunmaru");
	
	if (isset($_POST["update"]))
	{
		function numberInt($val)
		{
			if (is_numeric($val))
			{
				return intval($val);
			}
			else
			{
				return -1;
			}
		}
		
		function numberDec($val)
		{
			if (is_numeric($val))
			{
				return floatval($val);
			}
			else
			{
				return -1;
			}
		}
		
		$bookID = $_POST['bookID'];
		$bookGenre = $_POST['bookGenre'];
		$bstock = numberInt($_POST['bstock']);
		$bprice = numberDec($_POST['bprice']);
		
		$bdata = 'bookID='. $bookID. '&bookGenre='. $bookGenre. '&bstock='. $bstock. '&bprice'. $bprice; 
		
		if($bstock < 0) 
		{
			header("Location: adminUpdate.php?error=Stock is required!&$bdata");
			exit();
		}
		else if($bprice < 0)
		{
			header("Location: adminUpdate.php?error=Price is required!&$bdata");
			exit();
		}
		else
		{
			$query = "UPDATE book SET Stock=$bstock, Price=$bprice WHERE ISBN='$bookID'";
			$result = mysqli_query($connect, $query);
						
			if ($result)
			{
				header("Location: adminBGenre.php?type=$bookGenre");
				exit();
			}
			else
			{
				header("Location: adminBGenre.php?type=$bookGenre");
				exit();
			}
		}
	}
	else
	{
		header("Location: adminLogin.php");
		exit();
	}
	
	mysqli_close($connect);
?>