<?php
require_once('config.php');
?>
<?php

// database connection variables
$host = "localhost";
$username = "root";
$password = "@Noraisa";
$dbname = "mm_data";

// connect to the database
$conn = mysqli_connect($host, $username, $password, $dbname, "3307");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// get form data
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$email = mysqli_real_escape_string($conn, $email);


// insert data into the table
$sql = "INSERT INTO mm_user (name, email, username, password) VALUES ('name','$email','$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

// close database connection
mysqli_close($conn);

?>