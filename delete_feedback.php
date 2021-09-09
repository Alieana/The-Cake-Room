<?php
 include 'db_connect.php';

 $delete_id = $_GET['feedback_id'];
 $sql = "DELETE FROM user WHERE feedback_id='$delete_id'";
 $result = mysqli_query($conn,$sql) or die("Query failed");
 if($result)
 {
 	echo "<script>alert('Your Recipe has been upload!');</script>";
 	header("Location: admin_view_feedback.php");
    
 }
 else
 {
 	echo "<script>alert('Failed to delete!');</script>";
 }
 mysqli_close($conn);   
?>