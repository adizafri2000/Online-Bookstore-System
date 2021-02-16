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

    //author table
    $query = "CREATE TABLE Author(
        authorID varchar(10) NOT NULL PRIMARY KEY,
        authorName VARCHAR(60) NOT NULL
        )";
    $result = mysqli_query($connect,$query);

    //publisher table
    $query = "CREATE TABLE Publisher(
        pubID varchar(10) NOT NULL PRIMARY KEY,
        pubName VARCHAR(150) NOT NULL
        )";
    $result = mysqli_query($connect,$query);
	
	
    //book table
    $query = "CREATE TABLE Book(
        ISBN INT(13) NOT NULL PRIMARY KEY,
		authorID VARCHAR(10),
		pubID VARCHAR(10),
        bookName VARCHAR(60) NOT NULL,
        Summary VARCHAR(100),
        Year_Published INT(4) NOT NULL,
        Stock INT NOT NULL,
        Genre VARCHAR(10) NOT NULL,
        Price DECIMAL(5,2) NOT NULL,
		FOREIGN KEY (authorID) REFERENCES Author(authorID),
		FOREIGN KEY (pubID) REFERENCES Publisher(pubID)
        )";
    $result = mysqli_query($connect,$query);
    echo ($result ? "Elok je" : "Apa jadi ni");
	
	
    //Purchase table
    $query = "CREATE TABLE Purchase(
        userEmail VARCHAR(100) NOT NULL,
        ISBN INT(13) NOT NULL,
        Date_Purchased DATE NOT NULL,
        Total INT NOT NULL,
        Rating INT,
        PRIMARY KEY (userEmail,ISBN),
        FOREIGN KEY (userEmail) REFERENCES user (userEmail),
        FOREIGN KEY (ISBN) REFERENCES book (ISBN)
    )";
	
	
    $result = mysqli_query($connect,$query); 

    mysqli_close($connect);
?>
