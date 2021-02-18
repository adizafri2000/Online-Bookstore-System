<?php
    $connect = mysqli_connect("localhost","root","","chunchunmaru");
    $userEmail = $_GET['userEmail'];
    $query = "select * from cart where userEmail='".$userEmail."'";
    $result = mysqli_query($connect,$query);

    while($row = mysqli_fetch_array($result)){

        $ISBN = $row['ISBN'];

        //tally book stock
        $query = "update book set Stock=Stock-".$row['quantity']." where ISBN='".$ISBN."'";
        mysqli_query($connect,$query);

        //remove user cart records
        $query =  "delete from cart where userEmail='".$userEmail."'";
        mysqli_query($connect,$query);

        $date = date("Y-m-d");

        //insert records to Purchase table
        $query = "INSERT INTO Purchase (userEmail,ISBN,Date_Purchased,Total)
        VALUES(
            '".$userEmail."',
            '".$ISBN."',
            '".$date."',
            ".$row['quantity'].")";
        mysqli_query($connect,$query);

        header("Location:home.php?purchase=1&userEmail=".$userEmail);
    }

?>