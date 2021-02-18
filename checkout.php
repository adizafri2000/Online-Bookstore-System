<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chunchunmaru Bookstore</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <link href="reset.css" rel="stylesheet">
        <link href="checkout.css" rel="stylesheet">
    </head>
    <body>
        <header><?php include "header.php"?></header>
        <div id="contents">
            <div id="receipt">
                <?php
                    $connect = mysqli_connect("localhost","root","","chunchunmaru");
                    $query = "select * from cart where userEmail='".$_GET['userEmail']."'";
                    $result = mysqli_query($connect,$query);
                    $totalrow = mysqli_num_rows($result);

                    //Items are in cart, receipt can be generated
                    if($totalrow>0){
                        $grandtotal = 0;
                        echo"
                            <table>
                                <tr>
                                    <td colspan='2'>Book Title</td>
                                    <td>Quantity</td>
                                    <td>Price per Unit</td>
                                    <td>Total</td>
                                    <td>Remove</td>
                                </tr>
                        ";
                        while($row = mysqli_fetch_array($result)){
                            $query = "select * from book where ISBN='".$row['ISBN']."'";
                            $bookdata = mysqli_query($connect,$query);
                            $bookdata = mysqli_fetch_array($bookdata);

                            echo"
                            <tr>
                                <td><img src='images/book-cover/".$bookdata['Genre']."/".$bookdata['ISBN'].".jpg' width='80' height='100'></td>
                                <td>".$bookdata['bookName']."</td>
                                <td>".$row['quantity']."</td>
                                <td>RM".$bookdata['Price']."</td>
                                <td style='font-weight bold;'>RM".number_format(($row['quantity']*$bookdata['Price']),2)."</td>
                                <td>Click me to remove this fucker</td>
                            </tr>
                            ";

                            $grandtotal+=($row['quantity']*$bookdata['Price']);
                        }
                        echo"</table>";
                        echo"<p>Grand total: RM".number_format(($grandtotal),2)."</p>";
                        echo"<p><a href='transaction.php?userEmail=".$_GET['userEmail']."'>Pay</a></p>";
                    }

                    //No items, add something to cart first
                    else{
                        echo "<p id='notice'>Your cart is empty</p>";
                        $promotions = ["promotion-cooking.php","promotion-fantasy.php","promotion-health.php","promotion-horror.php","promotion-romance.php","promotion-self-help.php","promotion-thriller.php"];
                        $index = rand(0,6);
                        echo "<p id='promote'>Check out these books!</p>";
                        include $promotions[$index];
                    }
                ?>
            </div>
        </div>
        <footer><?php include "footer.inc.php";?></footer>
    </body>
</html>