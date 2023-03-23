<?php
session_start();

// Redirect the user to the login page if they are not logged in
if (!isset($_SESSION['loggedIn'])) {
	header("Location: login.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome</h1>
	<p>You are now logged in.</p>
</body>
</html>