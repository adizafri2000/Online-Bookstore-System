<?php
    $connect = mysqli_connect("localhost","root","","chunchunmaru");
    $userEmail = $_GET['userEmail'];
    $ISBN = $_GET['ISBN'];
    $newRating = $_GET['newRating'];
    $existing = $_GET['existing'];

    //New rating
    if($existing==0){
        $query = "INSERT INTO Rating (userEmail,ISBN,Rating)
            VALUES(
            '".$userEmail."',
            '".$ISBN."',
            ".$newRating.")";
    }

    //Update existing rating
    else{
        $query = "update rating set Rating=".$newRating." where 
                    userEmail='".$userEmail."' and
                    ISBN='".$ISBN."'";
    }

    mysqli_query($connect,$query);
    header("Location:useraccount.php?userEmail=".$userEmail);
?>