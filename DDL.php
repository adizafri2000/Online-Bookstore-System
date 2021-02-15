<?php
    //Connect and create new database for system
    $connect = mysqli_connect("localhost","root","");
    $query = "CREATE DATABASE chunchunmaru";
    $result = mysqli_query($connect,$query);

    //Update connection to database
    $connect = mysqli_connect("localhost","root","","chunchunmaru");

    //Create tables

    //user table
    $query = "CREATE TABLE User(
        Email VARCHAR(60) NOT NULL PRIMARY KEY,
        Password VARCHAR(10) NOT NULL,
        Name VARCHAR(30) NOT NULL,
        Address TEXT NOT NULL
        )";
    $result = mysqli_query($connect,$query);
    echo ($result ? "Elok je <br>" : "Apa jadi ni <br>");
    $connect = mysqli_connect("localhost","root","","chunchunmaru");
    
    //admin table
    $query = "CREATE TABLE ad_min(
        Email VARCHAR(60) NOT NULL PRIMARY KEY,
        Pword VARCHAR(10) NOT NULL,
        Nama VARCHAR(30) NOT NULL,
        )";
    $result = mysqli_query($connect,$query);
    echo ($result ? "Elok je <br>" : "Apa jadi ni <br>");

    //author table
    $query = "CREATE TABLE Author(
        ID varchar(10) NOT NULL PRIMARY KEY,
        Nama VARCHAR(30) NOT NULL,
        )";
    $result = mysqli_query($connect,$query);

    //publisher table
    $query = "CREATE TABLE Publisher(
        ID varchar(10) NOT NULL PRIMARY KEY,
        Nama VARCHAR(30) NOT NULL,
        )";
    $result = mysqli_query($connect,$query);

    //book table
    $query = "CREATE TABLE Book(
        ISBN INT(13) NOT NULL PRIMARY KEY,
        Nama VARCHAR(30) NOT NULL,
        Summary VARCHAR(100),
        Year_Published INT(4) NOT NULL,
        Stock INT NOT NULL,
        Genre VARCHAR(10) NOT NULL,
        Price DECIMAL(5,2) NOT NULL
        Author VARCHAR(10) NOT NULL FOREIGN KEY,
        Publisher VARCHAR(10) NOT NULL FOREIGN KEY,
        )";
    $result = mysqli_query($connect,$query);
    echo ($result ? "Elok je" : "Apa jadi ni");

    //Purchase table
    $query = "CREATE TABLE Purchase(
        Email VARCHAR(60) NOT NULL PRIMARY KEY FOREIGN KEY,
        ISBN INT(13) NOT NULL PRIMARY KEY FOREIGN KEY,
        Date_Purchased DATE NOT NULL,
        Total INT NOT NULL,
        Rating INT
        )";
    $result = mysqli_query($connect,$query);

    mysqli_close($connect);
?>