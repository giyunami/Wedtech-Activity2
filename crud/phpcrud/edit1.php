<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
			$zz = $_POST['id'];
			$nmae = $_POST['name'];
		    $email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			
	   include('connection.php');
		
	 			$query = 'UPDATE mm_user set name ="'.$name.'",
					email ="'.$email.'", username="'.$username.'",
					password="'.$password.'"WHERE
					id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>