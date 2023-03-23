<?php
$servername ='localhost';
$dbname   = 'mm_data';
$username = 'root';
$password = '@Noraisa1401';
try {
    $conn=mysqli_connect($servername,$username,$password,$dbname,"3307") or die("connection failed");
    echo "Ypu are logged in";
    $conn->query('select * from mm_user');
} catch (Exception $e) {
    print $e->getMessage() . "\n";
}
print "OK\n";
?>