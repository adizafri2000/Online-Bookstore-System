<?php

  	if(isset($_POST['reg'])){
  		$user_email= $_POST['userEmail'];
  		$user_password= $_POST['userPwd'];
        $user_name= $_POST['userNm'];
        $user_address= $_POST['userAdd'];
        $con = mysqli_connect("localhost","root","","chunchunmaru");

        $currentEmail = $_GET['currentEmail'];

  		if($user_email !="" and $user_password !="" and $user_name !="" and $user_address !=""){
            $query = "update user SET userEmail='".$user_email."',userPwd='".$user_password."',userName='".$user_name."',Address='".$user_address."' WHERE userEmail='".$currentEmail."'";
  			
            //Successful edit
            if(mysqli_query($con,$query)){

                //Update Purchase and Rating tables if email exists is records
                $query = "Update Purchase set userEmail='".$user_email."' where userEmail='".$currentEmail."'";
                mysqli_query($con,$query);

                $query = "Update Rating set userEmail='".$user_email."' where userEmail='".$currentEmail."'";
                mysqli_query($con,$query);

                header("Location:useraccount.php?userEmail=".$user_email."&edit=1");
  			}

            //Unsuccessful edit: Email already exists
            else{
                header("Location:accountedit.php?userEmail=".$_GET['currentEmail']."&edit=0");
  			}

  		}
        
        //Incomplete form submitted
        else{
            header("Location:accountedit.php?userEmail=".$_GET['currentEmail']."&empty=1");
  		}
  	}

    
?>