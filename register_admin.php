<?php
	include 'db_connect.php';
	$query = "SELECT * FROM admin";
	$result = mysqli_query($conn,$query) or die("Query failed");

	 if (isset($_POST['submit'])) 
	 {
	    $admin_name = $_POST['username'];
	    $admin_pass = $_POST['pass'];
	    $admin_email = $_POST['email'];
	    $admin_phone = $_POST['phone'];
	    $admin_DOB = $_POST['dob'];
	    $admin_gender = $_POST['gender'];

	    $sql = mysqli_query($conn, "INSERT INTO `admin`(`admin_name`,`admin_pass`,`admin_email`,`admin_phone`,`admin_DOB`,`admin_gender`)VALUES('".$admin_name."','".$admin_pass."','".$admin_email."','".$admin_phone."','".$admin_DOB."','".$admin_gender."')");

	    if($sql)
	    {
	      echo "<script>alert('You have been registered!');</script>";
	    }
	    else
	    {
	      echo "<script>alert('Error to registered!');</script>";
	    }
	}
?>
<html>
<head>
	<title>The Cake Room | Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
	body
	{
		font-family: Tahoma, Geneva, sans-serif;
		color: #fff;
		background: url(admin_bg.jpg);
		background-size: cover;
	}
	#msg
	{
		visibility: hidden;
		min-width: 250px;
		background-color: yellow;
		color: #000;
		text-align: center;
		border-radius: 2px;
		padding: 16px;
		position: fixed;
		z-index; 1;
		right: 30%;
		top: 30px;
		font-size: 17px;
		margin-right:30px;
	}

	.signup
	{
		background: rgba(44,62,80,0.7);
		padding: 40px;
		width: 250px;
		height: 430px;
		margin-top: 90px;
		margin-left: 180px;
		margin: 0 auto;
		margin-top: 90px;

	}

	form
	{
		background-color: black;
		opacity: 0.8;
		width: 300px;
		text-align: center;
	}

	input
	{
		width: 240px;
		text-align: center;
		background: transparent;
		border: none;
		border-bottom: 1px solid white;
		font-family: 'Play', sans-serif;
		font-size: 16px;
		font-weight: 200px;
		padding: 10px 0;
		transition: border 0.5s;
		outline: none;
		color: #fff;
	}

	input[type="submit"]
	{
		border: none;
		width: 190px;
		background: white;
		color: #ooo;
		font-size: 16px;
		line-height: 25px;
		padding: 10px 0;
		border-radius: 15px;
		cursor: pointer;
	}

	input[type="submit"]
	{
		color: black;
		background-color: white;
	}

	h2
	{
		color: #000;
	}

	::placeholder
	{
		color: aliceblue;
		opacity: 0.8;
	}

	</style>	

</head>
<body>

	<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%">
  <h3 class="w3-bar-item w3-black">Welcome</h3>
  <a href="admin_view_menu.php" class="w3-bar-item w3-button">View Menu</a>
  <a href="admin_view_feedback.php" class="w3-bar-item w3-button">View User Feedback</a>
  <a href="register_admin.php" class="w3-bar-item w3-button">Register Admin</a>
  <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
</div>

<!-- Page Content -->
<div style="margin-left:20%">

<div class="w3-container w3-black">
  <h1>The Cake Room</h1>
</div>
<br><br>
<center>
	<div>
		<h2 style="color: black;">Register Admin</h2><br>
		<form action="register_admin.php" method="post">
			<input type="text" name="username" placeholder="Username"><br><br>
			<input type="password" name="pass" placeholder="Password"><br><br>
			<input type="text" name="email" placeholder="Email address"><br><br>
			<input type="text" name="phone" placeholder="Phone Number"><br><br>
			<input type="date" name="dob" placeholder="Date of Birth"><br><br>
			<select type="text" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select><br><br>
			<input type="submit" name="submit" value="Register"><br><br>
		</form>
	</div>
</center>
</div>
</body>
</html>