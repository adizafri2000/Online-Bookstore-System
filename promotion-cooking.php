<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="promotion.css">

<?php
    $connect = mysqli_connect("localhost","root","","chunchunmaru");
    $query = "select ISBN,bookName from book where genre='cooking'";
    $result = mysqli_query($connect,$query);
    $row = array();
    for($i=0;$i<3;$i++){
        $row[$i] = mysqli_fetch_array($result);
    }
?>

<div id="promotion">
    <div id="genre-title">
        <p>Master the arts and techniques in the kitchen</p>
    </div>
    <div id="book-space">
        <div id="book1">
            <figure>
            <img src="<?php echo"images/book-cover/cooking/".$row[0]["ISBN"].".jpg";?>" width="80" height="120">
            <figcaption><?php echo $row[0]["bookName"];?></figcaption>
            </figure>
        </div>
        <div id="book2">
            <figure>
            <img src="<?php echo"images/book-cover/cooking/".$row[1]["ISBN"].".jpg";?>" width="80" height="120">
            <figcaption><?php echo $row[1]["bookName"];?></figcaption>
            </figure>
        </div>
        <div id="book3">
            <figure>
            <img src="<?php echo"images/book-cover/cooking/".$row[2]["ISBN"].".jpg";?>" width="80" height="120">
            <figcaption><?php echo $row[2]["bookName"];?></figcaption>
            </figure>
        </div>
    </div>
</div>