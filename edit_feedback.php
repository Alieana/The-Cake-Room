<?php 
 include 'db_connect.php';

 $edit_id=$_POST['txtId']; 
 $edit_name=$_POST['txtName']; 
 $edit_email=$_POST['txtEmail']; 
 $edit_date=$_POST['txtDate']; 
 $edit_feed=$_POST['txtFeed'];

 $query="UPDATE user SET feed_name='$edit_name',feed_email='$edit_email',feed_date='$edit_date',feedback='$edit_feed' WHERE feedback_id='$edit_id'" ;
 $result = mysqli_query($conn,$query) or die("Query failed");

 if($result)
 { 
 	echo " Updated Successfully !  <a href='admin_view_feedback.php'> back to view </a>"; 
 }
 else
 { 
 	echo "Problem occured !"; 
 }
 mysqli_close($conn);	
?>
