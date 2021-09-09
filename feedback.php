<?php
  include "db_connect.php";
  $conn=mysqli_connect('localhost','root','','dbcakeroom');
  $query = "SELECT * FROM user ORDER BY feedback_id ASC";
  $result = mysqli_query($conn,$query) or die("Query failed");  // SQL statement for checking
  //$result = $conn->query($query);

if (isset($_POST['submit'])) {
  $feedName = $_POST['feedName'];
  $feedEmail = $_POST['feedEmail'];
  $feedDate = $_POST['feedDate'];
  $feedback = $_POST['feedback'];

  $sql = mysqli_query($conn, "INSERT INTO `user`(`feed_name`,`feed_email`,`feed_date`,`feedback`)VALUES('".$feedName."','".$feedEmail."','".$feedDate."','".$feedback."')");
        if($sql)
        {
           echo "<script>alert('Your feedback has been upload!');</script>";
        }
        else
        {
          echo "<script>alert('Error to upload your feedback!');</script>";
        }
      }
?>
<html>
<head>
     <title> The Cake Room | Feedback Form</title>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    body
    {
      font-family: Tahoma, Geneva, sans-serif;
      color:white;
      background: url(homebg.jpg)no-repeat;
      background-size: cover;
    }
    
    .box
    { 
      float: left;
      border:1px solid none;
      padding: 0;
    }

    .box ul li
    {
      width: 250px;
      float: left;
      margin: 5px auto;
      text-align: center;
      background-color: #9b9eb1;
    }

    .box ul li a
    {
      text-decoration: none;
      display: block;
      color: white;
      text-align: center;
      padding: 15px 16px
    }

    .box ul li:hover
    {
      background-color: #B79892;
    }

    .box ul li a:hover
    {
      color:white;
    }

    table, th, td
    {
      margin: auto;
      border: 1px solid white;
      border-collapse: collapse;
      font-size: 12px;
      text-align: center;
      background: black;
      opacity: 0.9;
      color: white;
    }

    h4
    {
      border-bottom: 2px solid #000;
      background:#fff;
      color:#000;
      display:inline-block;
      padding:3px 15px;
      margin-left:10px;
    }

    .opt form, input[type="button"]
    {
      background-color: black;
      color: white;
      padding: 10px;
      margin: -14px auto;
      padding-left: 50px;
      padding-right: 50px;
      text-align: center;
    }

    form, input[type="button"];hover
    {
      background-color: green;
    }
</style>
</head>
<body>
  <div class="box">
    <ul type="none">
      <li><a href="user_homepage.html"> Home</a></li>
      <li><a href="cakeMenu.php"> Menu</a></li>
      <li><a href="addRecipe.php"> Recipe Form</a></li>
      <li><a href=""> About Us</a></li>
      <li><a href="feedback.php"> Feedback</a></li>
    </ul>
  </div>
	<br><br><br><br>
  <br>
<center>
  <form style="color:white;" action="feedback.php" method="POST" enctype="multipart/form-data">
    <center><h4>Feedback Form</h4></center>
   <table border="1">
    <tr>
      <td><h5>Enter your Name</h5></td>
      <td><input type="text" name="feedName" size="60" class="form-control" required></td>
    </tr>
    <tr>
      <td><h5>Enter your Email</h5></td>
      <td><input type="text" name="feedEmail" size="60" class="form-control" required></td>
    </tr>
    <tr>
      <td><h5>Enter date</h5></td>
      <td><input type="date" name="feedDate" class="form-control"></td>
    </tr>
    <tr>
      <td><h5>Enter your Feedback</h5></td>
      <td><textarea rows="15" cols="100" name="feedback" class="form-control"></textarea></td>
    </tr>
  </table>
     <center><br>
      <button type="submit" name="submit"  class="btn btn-lg btn-success">Save Feedback</button></td>
      <button type="reset" name="reset"  class="btn btn-lg btn-success">Clear Feedback</button></td>
    </form>
</body>
</html>