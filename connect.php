<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// $sqlTable = "CREATE TABLE users(
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     first_name VARCHAR(20),
//     last_name VARCHAR(20),
//     email VARCHAR(50) UNIQUE,
//     phone INT UNIQUE,
//     user_type VARCHAR(15),
//     password VARCHAR(255)
// )";

// if(mysqli_query($link, $sqlTable)) {
//     echo "Table created";
// } else {
//      echo "ERROR: Could not create table: " . mysqli_error($link);
// }