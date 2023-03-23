<?php
include 'config.php';
session_start();
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	//check login details
	$stmt = $con->prepare("select * from mm_user where username = '$username' and password = '$password'");
	$stmt->execute();
	//echo $stmt->rowCount();
	//exit();
	if($stmt->rowCount()>0){
		$_SESSION['username'] = $username;
		header("location: home.php");
		$_SESSION['You are logged in'] = "Success";
	}
	else{
		header("location: login.php");
		$_SESSION['error'] = "<div class='alert alert-danger' role='alert'>Oh snap! Invalid login details.</div>";
		}
	}