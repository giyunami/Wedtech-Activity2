<?php
$servername ='localhost';
$dbname   = 'mm_data';
$username = 'root';
$password = '@Noraisa1401';
try {
    $conn=mysqli_connect($servername,$username,$password,$dbname,"3307");
    echo "connection success";
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>