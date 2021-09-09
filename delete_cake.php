<?php
 include 'db_connect.php';

 $delete_id = $_GET['cake_id'];
 $sql = "DELETE FROM cake_menu WHERE cake_id='$delete_id'";
 $result = mysqli_query($conn,$sql) or die("Query failed");
 if($result)
 {
 	echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('Succesfully Delete.');
				window.location.href='viewCoach.php';
				</SCRIPT>");
    
 }
 else
 {
 	echo "<script>alert('Failed to delete!');</script>";
 }
 mysqli_close($conn);   
?>