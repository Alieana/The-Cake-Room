<?php
include ('db_connect.php');

if(isset($_POST['submit']))
{
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    
    $query = "SELECT * FROM admin WHERE admin_name = '$username' AND admin_pass = '$password'";
    $result = mysqli_query($conn,$query) OR die("Query failed!");

    if($row = mysqli_fetch_assoc($result))
    {
        session_start();
        $_SESSION['admin_id'] = $row['admin_id'];
        $_SESSION['admin_name'] = $row['admin_name'];
        $_SESSION['admin_pass'] = $row['admin_pass'];
        $_SESSION['admin_email'] = $row['admin_email'];
        $_SESSION['admin_phone'] = $row['admin_phone'];
        $_SESSION['admin_DOB'] = $row['admin_DOB'];
        $_SESSION['admin_gender'] = $row['admin_gender'];
        header("Location: admin_page.php");  
    }
    else
    {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Sorry, you have entered the wrong password!');
        window.location.href='login.php';
        </SCRIPT>");
    }
}
else
{
        header("Location: login.php");
        
}
 ?>