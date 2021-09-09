<?php
	if(!isset($_SESSION))
	{
		include 'db_connect.php';
		$query = "SELECT * FROM admin";
		$result = mysqli_query($conn,$query) OR die("Query failed!");
	}
	else
	{
		header("location:login.php");
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
	</style>
</head>
<body>
<!-- Sidebar -->
 <?php 
 while ($row = mysqli_fetch_array($result))
 {
 	$cakeid=$row['admin_id'];
 	$name=$row['admin_name'];
		}
 ?>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%">
  <h3 class="w3-bar-item w3-black">Welcome  <?php echo $name;?></h3>
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
</div>
</body>
</html>