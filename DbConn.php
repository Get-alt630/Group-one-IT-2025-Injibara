<?php

/*
project-folder/
├── login.html
├── login.php
├── dashboard.php
├── logout.php
├── register.html
└── register.php*/

// Database configuration (replace with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "InjibaraUniversity";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn==false) {
    die("Connection failed:");
}


?>