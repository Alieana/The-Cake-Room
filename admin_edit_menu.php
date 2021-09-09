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
<form action="edit_menu.php" method="post">
<?php
include 'db_connect.php';

if(!isset($_SESSION))
{
	$cake_id = $_GET['cake_id'];
	$query = "SELECT * FROM cake_menu WHERE cake_id LIKE $cake_id";
	$result = mysqli_query($conn,$query) or die("Query failed");
}
else
{
  echo "<script>alert('Failed to Edit!');</script>";
	header("location:admin_view_menu.php");
}
?>
<table>
<?php while ($row = mysqli_fetch_array($result))
{
	$cakeid=$row['cake_id'];
	$name=$row['name'];
	$cakename= $row['cake_name'];
	$cakecat= $row['cake_category'];
  $cakedate=$row['cake_date'];
  $cakeing= $row['cake_ingredient'];
	$cakerecipe= $row['cake_recipe'];
}
?>
<tr>
    <td width="75"><strong>No</strong></td>
    <td width="121"> <input name="txtId" type="text" value="<?php echo $cakeid?>"></td>
  </tr>
  <tr>
    <td><strong>Share by</strong></td>
    <td>
      <input name="txtName" type="text" value="<?php echo $name?>"></td>
  </tr>
  <tr>
    <td><strong>Cake Name</strong></td>
    <td>
      <input name="txtCake" type="text" value="<?php echo $cakename?>"></td>
  </tr>
  <tr>
    <td><strong>Cake Category</strong></td>
    <td>
      <input name="txtCat" type="text" value="<?php echo $cakecat?>"></td>
  </tr>
  <tr>
    <td><strong>Share Date</strong></td>
    <td>
      <input name="txtDate" type="text" value="<?php echo $cakedate?>"></td>
  </tr>
  <tr>
    <td><strong>Cake Ingredient</strong></td>
    <td>
      <textarea name="txtIng" rows="8" cols="60"><?php echo $cakeing?></textarea></td>
    </tr>
   <tr>
    <td><strong>Cake Recipe</strong></td>
    <td>
      <textarea name="txtRecipe" rows="8" cols="60"><?php echo $cakerecipe?></textarea></td>
  </tr>
</table><br>
<input type="submit" name="Submit" value="Save">
</center>
</form>
</div>
</body>
</html>
