<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href="genre-navigation.css" rel="stylesheet">

<div id="genre-bar">
    <div id="bar-header">
        <p>Browse by genre</p>
    </div>
    <div id="bar-contents">
        <ul>
            <?php
                $link = "searchresults.php";
                if (isset($_GET['userEmail']))
                    $link = $link."?userEmail=".$_GET['userEmail'];
                function linkmaker($genre){
                    $link = "searchresults.php";
                    $link = $link."?genre=".$genre;
                    if (isset($_GET['userEmail']))
                        $link = $link."&userEmail=".$_GET['userEmail'];
                    return $link;
                }
            ?>
            <li><a href="<?php echo linkmaker('cooking');?>">Cooking</a></li>
            <li><a href="<?php echo linkmaker('fantasy');?>">Fantasy</a></li>
            <li><a href="<?php echo linkmaker('horror');?>">Horror</a></li>
            <li><a href="<?php echo linkmaker('romance');?>">Romance</a></li>
            <li><a href="<?php echo linkmaker('health');?>">Health</a></li>
            <li><a href="<?php echo linkmaker('self-help');?>">Self-Help</a></li>
            <li><a href="<?php echo linkmaker('thriller');?>">Thriller</a></li>
        </ul>
    </div>
</div>