<!DOCTYPE>
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

	table, th, td
	{
		border: 1px solid white;
		text-align: left;
		background: black;
		opacity: 0.8;
		color: white;
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
</div><br>
<center><h3 class="w3-text-black"><span>Edit Cake Menu</span></h3></center><br><center>
<form action="edit_feedback.php" method="post">
<?php
include "db_connect.php";

if(!isset($_SESSION))
{
	$feedback_id = $_GET['feedback_id'];
	$query = "SELECT * FROM user WHERE feedback_id LIKE $feedback_id";
	$result = mysqli_query($conn,$query) or die("Query failed");
}
else
{

	header("location:admin_view_feedback.php");
}
?>
<table>
<?php while ($row = mysqli_fetch_array($result))
{
	$feedback_id=$row['feedback_id'];
	$feedback_name=$row['feed_name'];
	$feedback_email= $row['feed_email'];
	$feedback_date= $row['feed_date'];
    $feedback=$row['feedback'];
}
?>
<tr>
    <td><strong>No</strong></td>
    <td><input name="txtId" type="text" value="<?php echo $feedback_id?>"></td>
  </tr>
  <tr>
    <td><strong>Name</strong></td>
    <td>
      <input name="txtName" type="text" value="<?php echo $feedback_name?>"></td>
  </tr>
  <tr>
    <td><strong>Email</strong></td>
    <td>
      <input name="txtEmail" type="text" value="<?php echo $feedback_email?>"></td>
  </tr>
  <tr>
    <td><strong>Date</strong></td>
    <td>
      <input name="txtDate" type="date" value="<?php echo $feedback_date?>"></td>
  </tr>
  <tr>
    <td><strong>Feedback</strong></td>
    <td>
      <textarea name="txtFeed" rows="6" cols="60"><?php echo $feedback?></textarea></td>
  </tr>
</table><br>
<input type="submit" name="Submit" value="Save">
</center>
</form>
</div>
</body>
</html>
