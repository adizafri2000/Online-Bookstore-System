<?php
	
    //Connect and create new database for system
    $connect = mysqli_connect("localhost","root","");
    $query = "CREATE DATABASE chunchunmaru";
    $result = mysqli_query($connect,$query); 
	

    //Update connection to database
    $connect = mysqli_connect("localhost","root","","chunchunmaru");

    //Create tables

    // user table
    $query = "CREATE TABLE User( 
        userEmail VARCHAR(100) NOT NULL PRIMARY KEY,
        userPwd VARCHAR(30) NOT NULL,
        userName VARCHAR(150) NOT NULL,
        Address TEXT NOT NULL
        )";
    $result = mysqli_query($connect,$query);
    echo ($result ? "Elok je <br>" : "Apa jadi ni <br>");
    
    //admin table
    $query = "CREATE TABLE Admin(
        adminEmail VARCHAR(100) NOT NULL PRIMARY KEY,
        adminPwd VARCHAR(30) NOT NULL,
        admiName VARCHAR(150) NOT NULL
        )";
    $result = mysqli_query($connect,$query);
    echo ($result ? "Elok je <br>" : "Apa jadi ni <br>");
	
    //book table
    $query = "CREATE TABLE Book(
        ISBN VARCHAR(13) NOT NULL PRIMARY KEY,
		authorName VARCHAR(60) NOT NULL,
		pubName VARCHAR(150) NOT NULL,
        bookName VARCHAR(100) NOT NULL,
        Summary TEXT,
        Year_Published INT(4) NOT NULL,
        Stock INT NOT NULL,
        Genre VARCHAR(10) NOT NULL,
        Price DECIMAL(5,2) NOT NULL
        )";
    $result = mysqli_query($connect,$query);
    echo ($result ? "Elok je" : "Apa jadi ni");
	
	
    //Purchase table
    $query = "CREATE TABLE Purchase(
        userEmail VARCHAR(100) NOT NULL,
        ISBN VARCHAR(13) NOT NULL,
        Date_Purchased DATE NOT NULL,
        Total INT NOT NULL,
        PRIMARY KEY (userEmail,ISBN),
        FOREIGN KEY (userEmail) REFERENCES user (userEmail) ON UPDATE CASCADE,
        FOREIGN KEY (ISBN) REFERENCES book (ISBN)
    )";
    $result = mysqli_query($connect,$query);

    //Rating table
	$query = "CREATE TABLE Rating(
        userEmail VARCHAR(100) NOT NULL,
        ISBN VARCHAR(13) NOT NULL,
        Rating INT,
        PRIMARY KEY (userEmail,ISBN),
        FOREIGN KEY (userEmail) REFERENCES user (userEmail) ON UPDATE CASCADE,
        FOREIGN KEY (ISBN) REFERENCES book (ISBN)
    )";
	
    $result = mysqli_query($connect,$query); 

    //Cart table
    $query = "CREATE TABLE Cart(
        userEmail VARCHAR(100) NOT NULL,
        ISBN VARCHAR(13) NOT NULL,
        quantity INT NOT NULL,
        PRIMARY KEY (userEmail,ISBN),
        FOREIGN KEY (userEmail) REFERENCES user (userEmail) ON UPDATE CASCADE,
        FOREIGN KEY (ISBN) REFERENCES book (ISBN)
    )";
    $result = mysqli_query($connect,$query); 

    mysqli_close($connect);
?>
