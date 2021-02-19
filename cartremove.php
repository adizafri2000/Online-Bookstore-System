<?php
    $connect = mysqli_connect("localhost","root","","chunchunmaru");
    $userEmail = $_GET['userEmail'];
    $ISBN = $_GET['ISBN'];

    $query = "delete from Cart where userEmail='".$userEmail."' and ISBN='".$ISBN."'";
    $result = mysqli_query($connect,$query);

    header(("Location:checkout.php?userEmail=".$userEmail));
?>