<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "chunchunmaru");
	
	if (isset($_POST["isbn"]) && isset($_POST["btitle"]) && isset($_POST["bauthor"]) && isset($_POST["bgenre"]) && isset($_POST["bsummary"]) && isset($_POST["bpublish"]) && isset($_POST["byearpub"]) && isset($_POST["bstock"]) && isset($_POST["bprice"]))
	{
		function validate($bData)
		{
			$bData = trim($bData);
			$bData = stripslashes($bData);
			$bData = htmlspecialchars($bData);
			return $bData;
		}
		
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
		
		$btitle = mysqli_real_escape_string($connect, $_POST['btitle']);
		$bauthor = mysqli_real_escape_string($connect, $_POST['bauthor']);
		$bsummary = mysqli_real_escape_string($connect, $_POST['bsummary']);
		$bpublish = mysqli_real_escape_string($connect, $_POST['bpublish']);
		$isbn = validate($_POST["isbn"]);    
		$byearpub = numberInt($_POST["byearpub"]);
		$bstock = numberInt($_POST["bstock"]);
		$bprice = numberDec($_POST["bprice"]);
		$bgenre = $_POST["bgenre"]; 
		
		$book_data = 'isbn='. $isbn. '&btitle='. $btitle. '&bauthor='. $bauthor. '&bsummary='. $bsummary. '&bpublish='. $bpublish. '&byearpub='. $byearpub. '&bstock='. $bstock. '&bprice='. $bprice. '&bgenre=' .$bgenre;
		
		if (empty($isbn)) 
		{
			header("Location: adminAddBooks.php?error=ISBN is required&$book_data");
			exit();
		}
		else if(empty($btitle)) 
		{
			header("Location: adminAddBooks.php?error=Title is required&$book_data");
			exit();
		}
		else if(empty($bauthor)) 
		{
			header("Location: adminAddBooks.php?error=Author is required&$book_data");
			exit();
		}
		else if(empty($bpublish)) 
		{
			header("Location: adminAddBooks.php?error=Publisher is required&$book_data");
			exit();
		}
		else if($byearpub < 0) 
		{
			header("Location: adminAddBooks.php?error=Year published is required&$book_data");
			exit();
		}
		else if($bstock < 0) 
		{
			header("Location: adminAddBooks.php?error=Stock is required&$book_data");
			exit();
		}
		else if($bprice < 0)
		{
			header("Location: adminAddBooks.php?error=Price is required&$book_data");
			exit();
		}
		else
		{
			$sql = "SELECT * FROM book WHERE ISBN='$isbn'";
			$result = mysqli_query($connect, $sql);

			if (mysqli_num_rows($result) > 0) {
				header("Location: adminAddBooks.php?error=ISBN cannot be duplicated.&$book_data");
				exit();
			}
			else 
			{
				$query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
				VALUES('$isbn', '$bauthor', '$bpublish', '$btitle', '$bsummary', $byearpub, $bstock, '$bgenre', $bprice)";
				
				$result = mysqli_query($connect, $query);
				
				if ($result) 
				{
					echo ' <script type="text/javascript"> alert("Book is insert succesfully!") </script> ';
					echo ' <script type="text/javascript"> window.location.href = "adminAddBooks.php" </script> ';
				}
				else 
				{
					header("Location: adminAddBooks.php?error=Unknown error occurred&$book_data");
					exit();
				}
			}
		}
		
	}
	else
	{
		header("Location: adminAddBooks.php");
		exit();
	}
	
	mysqli_close($connect);
?>