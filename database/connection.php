<?php


$conn = mysqli_connect('localhost', 'root', '', 'crud');



// Create database
// $sql = "CREATE DATABASE crud";


// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }


// sql to create table
// $create_table = "CREATE TABLE user (
//     id INT(6) AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     mobile INT
//     )";

// if (mysqli_query($conn, $create_table)) {
//     echo "Table user created successfully";
//   } else {
//     echo "Error creating table: " . mysqli_error($conn);
//   }

if (!$conn) {
    echo "Error connecting";
}

?>