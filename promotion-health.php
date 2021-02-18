<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="promotion.css">

<?php
    $connect = mysqli_connect("localhost","root","","chunchunmaru");
    $query = "select ISBN,bookName from book where genre='health'";
    $result = mysqli_query($connect,$query);
    $row = array();
    for($i=0;$i<3;$i++){
        $row[$i] = mysqli_fetch_array($result);
    }
?>

<div id="promotion">
    <div id="genre-title">
        <p>Saviour a long, healthy, living</p>
    </div>
    <div id="book-space">
        <div id="book1">
            <a href="<?php 
                $link = "bookview.php?ISBN=".$row[0]['ISBN'];
                if (isset($_GET['userEmail']))
                    $link = $link."&userEmail=".$_GET['userEmail'];
                echo $link;
            ?>">
                <figure>
                <img src="<?php echo"images/book-cover/health/".$row[0]["ISBN"].".jpg";?>" width="80" height="120">
                <figcaption><?php echo $row[0]["bookName"];?></figcaption>
                </figure>
            </a>
        </div>
        <div id="book2">
            <a href="<?php 
                $link = "bookview.php?ISBN=".$row[1]['ISBN'];
                if (isset($_GET['userEmail']))
                    $link = $link."&userEmail=".$_GET['userEmail'];
                echo $link;
            ?>">
                <figure>
                <img src="<?php echo"images/book-cover/health/".$row[1]["ISBN"].".jpg";?>" width="80" height="120">
                <figcaption><?php echo $row[1]["bookName"];?></figcaption>
                </figure>
            </a>
        </div>
        <div id="book3">
            <a href="<?php 
                $link = "bookview.php?ISBN=".$row[2]['ISBN'];
                if (isset($_GET['userEmail']))
                    $link = $link."&userEmail=".$_GET['userEmail'];
                echo $link;
            ?>">
                <figure>
                <img src="<?php echo"images/book-cover/health/".$row[2]["ISBN"].".jpg";?>" width="80" height="120">
                <figcaption><?php echo $row[2]["bookName"];?></figcaption>
                </figure>
            </a>
        </div>
    </div>
</div>