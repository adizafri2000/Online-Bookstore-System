<?php
    $connect = mysqli_connect("localhost","root","","chunchunmaru");
    $userEmail = $_GET['userEmail'];
    $ISBN = $_GET['ISBN'];

    //Check if same product is in cart
    $query = "select * from Cart where userEmail='".$userEmail."' and ISBN='".$ISBN."'";
    $result = mysqli_query($connect,$query);
    $totalrow = mysqli_num_rows($result);

    //Existing product in cart
    if($totalrow>0){
        $query = "Update Cart set quantity=".$_POST['quantity']." where userEmail='".$userEmail."' and ISBN='".$ISBN."'";
    }
    
    //No same products already in cart
    else{
        $query = "Insert into Cart(userEmail, ISBN, quantity) VALUES (
            '".$userEmail."',
            '".$ISBN."',
            ".$_POST['quantity'].")
        ";
    }

    $result = mysqli_query($connect,$query);
    $link = "bookview.php?userEmail=".$userEmail."&ISBN=".$ISBN."&quantity=".$_POST['quantity'];

    header("Location:".$link);
?>