<?php
  include "db_connect.php";
  $conn=mysqli_connect('localhost','root','','dbcakeroom');
  $query = "SELECT * FROM cake_menu ORDER BY cake_id ASC";
  $result = mysqli_query($conn,$query) or die("Query failed");  // SQL statement for checking
  //$result = $conn->query($query);

if (isset($_POST['submit'])) {
	$cakeName = $_POST['cakeName'];
	$cakeCategory = $_POST['cakeCategory'];
	$cakeDate = $_POST['cakeDate'];
	$cakeIngredient = $_POST['cakeIngredient'];
	$cakeRecipe = $_POST['cakeRecipe'];

	$cakeImg= $_FILES['cakeImg'];

	$fileName = $_FILES['cakeImg']['name'];
	$fileTmpName = $_FILES['cakeImg']['tmp_name'];
	$fileSize = $_FILES['cakeImg']['size'];
	$fileError = $_FILES['cakeImg']['error'];
	$fileType = $_FILES['cakeImg']['type'];

	$fileExt = explode('.',$fileName);
	$fileTrim = substr($fileName, 0, (strlen ($fileName)) - (strlen (strrchr($fileName,'.'))));
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg','jpeg','png');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000000) {
				$fileNameNew = abs( crc32(uniqid('', true))).".".$fileTrim.".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);

				$sql = mysqli_query($conn, "INSERT INTO `cake_menu`(`cake_name`,`cake_category`,`cake_date`,`cake_ingredient`,`cake_recipe`,`cake_img`)VALUES('".$cakeName."','".$cakeCategory."','".$cakeDate."','".$cakeIngredient."','".$cakeRecipe."','".$fileNameNew."')");
				if($sql)
				{
					 header("Location: addRecipe.php");
					 echo "<script type='text/javascript'>alert('Your Recipe has been upload!');</script>";
				}
				else
				{
					echo "failed to upload in database";
				}
			}else{
					echo "files to big";
			}
		}else{
			echo "There was an error uploading your files";
		}
	}else{
		echo "<script type='text/javascript'>alert('You cannot upload files of this type!');</script>";
	}
}
?>
