<?php
	include "db_connect.php";
	$query = "SELECT * FROM user ORDER BY feedback_id ASC";
	$result = mysqli_query($conn,$query) or die("Query failed");
?>
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
		margin: auto;
		border: 1px solid white;
		border-collapse: collapse;
		font-size: 12px;
		text-align: left;
		background: black;
		opacity: 0.8;
		color: white;
	}

	#myInput 
	{ 
		width: 80%;
		font-size: 12px;
		padding: 12px 20px 12px 40px;
		border: 1px solid #ddd;
		margin-bottom: 12px;
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
<!--View User Table-->
 <br>
    <div>
    <center><h3 class="w3-text-black"><span>List of All Feedback</span></h3></center>
</div>
<br>
    <div>
        <table class="w3-table w3-border w3-centered">
                <tr>
                    <th width="2%">No</th>
                    <th width="10%">Name</th>
                    <th width="10%">Email</th>
                    <th width="10%">Date</th>
                    <th width="10%">Feedback</th>
                    <th width="10%" colspan="2">Action</th>
                </tr>
                <!--data looping-->
                <?php
                while($row = mysqli_fetch_array($result)){ ?>
                		<tr>
                			<td><?php echo $row['feedback_id'];?></a></td>
                			<td><?php echo $row['feed_name'];?></td>
                			<td><?php echo $row['feed_email'];?></td>
                			<td><?php echo $row['feed_date'];?></td>
                			<td><?php echo $row['feedback'];?></td>
                			<td width="5%"><div align="center"><a href="admin_edit_feedback.php?feedback_id=<?php print ($row['feedback_id']);?>">Edit</a></div></td>
                			<td width="5%"><div align="center"><a href="delete_feedback.php?feedback_id=<?php print ($row['feedback_id']);?>">Delete </a></div></td>
                		</tr>
                	</form>
                		<?php  
                		// looping close
                	}
                	 ?>
            </table>
</div>
			</div>
		</div>
	</div>
</body>
</html>