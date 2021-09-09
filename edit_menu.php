<?php 
 include 'db_connect.php';

 $edit_id=$_POST['txtId']; 
 $edit_name=$_POST['txtName']; 
 $edit_cake=$_POST['txtCake']; 
 $edit_cat=$_POST['txtCat']; 
 $edit_date=$_POST['txtDate'];
 $edit_ing=$_POST['txtIng'];
 $edit_recipe=$_POST['txtRecipe'];
 //Update data   
 $query="UPDATE cake_menu SET name='$edit_name',cake_name='$edit_cake',cake_category='$edit_cat',cake_date='$edit_date',cake_ingredient='$edit_ing',cake_recipe='$edit_recipe' where cake_id='$edit_id'" ;
 $result = mysqli_query($conn,$query) or die("Query failed");

 if($result)
 { 
 	echo " Updated Successfully !  <a href='admin_view_menu.php'> back to view </a>"; 
 }
 else
 { 
 	echo "Problem occured !"; 
 }
 mysqli_close($conn);	
?>
