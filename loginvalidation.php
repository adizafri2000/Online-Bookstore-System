<?php
    $connect = mysqli_connect("localhost","root","","chunchunmaru");
    $query = "select userEmail,userPwd from user where
                userEmail='".$_POST["userEmail"].
                "' and userPwd='".$_POST["userPwd"]."'";
    $result = mysqli_query($connect,$query);
    if (mysqli_num_rows($result)>0) $result=true;
    else $result = false;
    echo $_POST["userEmail"]." ".$_POST["userPwd"]."<br>";
    echo ($result ? "Account exists" : "Account nonexistent");
    if($result){
        header("Location:home.php?userEmail=".$_POST["userEmail"]);
    }
    else{
        header("Location:login.php?success='0'");
    }
        
?>