<?php

  	if(isset($_POST['reg'])){
  		$user_email= $_POST['userEmail'];
  		$user_password= $_POST['userPwd'];
        $user_name= $_POST['userNm'];
        $user_address= $_POST['userAdd'];
        $con = mysqli_connect("localhost","root","","chunchunmaru");

  		if($user_email !="" and $user_password !="" and $user_name !="" and $user_address !=""){
            $query = "update user SET userEmail='".$user_email."',userPwd='".$user_password."',userName='".$user_name."',Address='".$user_address."' WHERE userEmail='".$_GET['currentEmail']."'";
  			if(mysqli_query($con,$query)){
                header("Location:useraccount.php?userEmail=".$user_email."&edit=1");
  			}
            else{
                header("Location:accountedit.php?userEmail=".$_GET['currentEmail']."&edit=0");
  			}

  		}else{
            header("Location:accountedit.php?userEmail=".$_GET['currentEmail']."&empty=1");
  		}
  	}

    
?>