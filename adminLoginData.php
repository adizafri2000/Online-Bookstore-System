<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "chunchunmaru");
	
	if (isset($_POST["email"]) && isset($_POST["uname"]) && isset($_POST["pwd"]))
	{
		function validate($minData)
		{
			$minData = trim($minData);
			$minData = stripslashes($minData);
			$minData = htmlspecialchars($minData);
			return $minData;
		}
		
		$email = validate($_POST["email"]);  
		$uname = validate($_POST["uname"]);
		$pwd = validate($_POST["pwd"]);
		
		if (empty($email) || empty($uname) || empty($pwd))
		{
			header("Location: adminLogin.php?error=Please fill in all field.");
			exit();
		}
		else
		{
			$query = "SELECT * FROM admin WHERE adminEmail='$email' AND admiName='$uname' AND adminPwd='$pwd'";
			$result = mysqli_query($connect, $query);
			
			if (mysqli_num_rows($result) === 1) //same value/type
			{
				$row = mysqli_fetch_assoc($result);
				if ($row['adminEmail'] === $email && $row['adminPwd'] === $pwd && $row['admiName'] === $uname)
				{
					$_SESSION['adminEmail'] = $row['adminEmail'];
					$_SESSION['adminPwd'] = $row['adminPwd'];
					$_SESSION['admiName'] = $row['admiName'];
					header("Location: adminHome.php");
					exit();
				}
				else
				{
					header("Location: adminLogin.php?error=Incorrect email, usernmae, or password");
					exit();
				}
			}
			else{
				header("Location: adminLogin.php?error=Incorrect email, usernmae, or password");
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