<?php 

session_start();

	if(!isset($_SESSION['login'])){
		header('http://localhost/Norai/dashboard/index.php#');
	}

	if(isset($_GET['#logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

  
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Magic Shop Dashboard</title>
        <link rel="icon" href="../image/newlogo.png">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
  
<?php if (isset($error)) { ?>
		<p><?php echo $error; ?></p>
	<?php } ?>
<input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Magic <span>Shop</span></h3>
      </div>
      <div class="right_area">
      <a href="http://localhost/Norai/login/login.php">
                    <span class="logout_btn" id="logout">Logout</span>
                </a>
      </div>
      <div class="title">
        <h1 style="font-size: 500%; color: white;" ><center>WELCOME</center></h1>
     
        <h1 style="font-size: 500%; color: skyblue;" ><center>MAGICIANS!</center></h1>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    
    <div class="sidebar">
      <center>
        <img src="../img/Hat.png" class="profile_image" alt="">
        <h4>User</h4>
      </center>
      <form action="" class="search-box">
      <input type="text" class="text search-input" placeholder="Type here to search..." />
    </form>
      <a href="http://localhost/Norai/crud/phpcrud/index.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a>
      <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      
    </div>
    <!--sidebar end-->

    <div class="content"></div>

    
</body>  

<script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');

    btn.onclick = function () {
        sidebar.classList.toggle('active');
    };
</script>
<footer class="footer">
    <p>Magic Shop &copy 2011</p>
    <div class="footer-col">
        <ul>
        <li><a href="">FAQ</li>
        <li><a href="#">About Us</li>
        <li><a href="#">Contact Us</li>
        <li><a href="#">Products</li>
        </ul>
        
    </div>

</footer>
</html>