<?php
  include "db_connect.php";
  $query = "SELECT * FROM cake_menu ORDER BY cake_id ASC";
  $result = mysqli_query($conn,$query) or die("Query failed");

  if (isset($_POST['submit'])) 
  {
    $cakeName = $_POST['cakeName'];
    $name = $_POST['name'];
    $cakeCategory = $_POST['cakeCategory'];
    $cakeDate = $_POST['cakeDate'];
    $cakeIngredient = $_POST['cakeIngredient'];
    $cakeRecipe = $_POST['cakeRecipe'];

    $cakeImg = addslashes($_FILES['cakeImg']['tmp_name']);
    $cakeImgname = addslashes($_FILES['cakeImg']['name']);
    $cakeImg = file_get_contents($cakeImg);
    $cakeImg = base64_encode($cakeImg);

    $fileName = $_FILES['cakeImg']['name'];
    $fileTmpName = $_FILES['cakeImg']['tmp_name'];
    $fileSize = $_FILES['cakeImg']['size'];
    $fileError = $_FILES['cakeImg']['error'];
    $fileType = $_FILES['cakeImg']['type'];

    $fileExt = explode('.',$fileName);
    $fileTrim = substr($fileName, 0, (strlen ($fileName)) - (strlen (strrchr($fileName,'.'))));
    $fileActualExt = strtolower(end($fileExt));

    $sql = mysqli_query($conn, "INSERT INTO `cake_menu`(`cake_name`,`name`,`cake_category`,`cake_date`,`cake_ingredient`,`cake_recipe`,`cake_imgname`,`cake_img`)VALUES('".$cakeName."','".$name."','".$cakeCategory."','".$cakeDate."','".$cakeIngredient."','".$cakeRecipe."','".$cakeImgname."','".$cakeImg."')");
    
    if($sql)
    {
      echo "<script>alert('Your Recipe has been upload!');</script>";
    }
    else
    {
      echo "<script>alert('Error to upload your recipe!');</script>";
    }
  }
?>
<!DOCTYPE>
<html>
<head>
  <title> The Cake Room | Recipe Form</title>
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
      width: 1500px;
      float: left;
      border:1px solid none;
      padding: 0;
    }

    .box ul li
    {
      width: 255px;
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
      text-align: left;
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
      <li><a href="aboutus.php"> About Us</a></li>
      <li><a href="feedback.php"> Feedback</a></li>
    </ul>
  </div>
	<br><br><br><br>
  <br>
  <center>
    <form style="color:white;" action="addRecipe.php" method="POST" enctype="multipart/form-data">
      <center><h4>Recipe Form</h4></center>
      <table border="1">
        <tr>
          <td><h5>Enter Your Name</h5></td>
          <td><input type="text" name="name" colspan="50" size="60" class="form-control" required></td>
        </tr>
        <tr>
          <td><h5>Enter Cake Name</h5></td>
          <td><input type="text" name="cakeName" colspan="50" size="60" class="form-control" required></td>
        </tr>
        <tr>
          <td><h5>Choose Cake Category</h5></td>
          <td><select type="text" name="cakeCategory" class="form-control">
            <option value="Cake">Cake</option>
            <option value="Cookies">Cookies</option>
            <option value="Cupcake">Cupcake</option>
          </select></td>
        </tr>
        <tr>
          <td><h5>Enter date</h5></td>
          <td><input type="date" name="cakeDate" class="form-control"></td>
        </tr>
        <tr>
          <td><h5>Enter Cake Ingredient</h5></td>
          <td><textarea rows="6" cols="100" name="cakeIngredient" class="form-control"  placeholder="Eg. 1. Sugar.." required></textarea></td>
        </tr>
        <tr>
          <td><h5>Enter Cake Recipe</h5></td>
          <td><textarea rows="6" cols="100" name="cakeRecipe" class="form-control" placeholder="Eg. 1. Heat the oven.." required></textarea></td>
        </tr>
        <tr>
          <td><h5 >Upload Cake Image</h5></td>
          <td><input type="file" name="cakeImg" class="form-control" required></td>
        </tr>
        </table>
          <br>
          <button type="submit" name="submit"  class="btn btn-lg btn-success">Save Recipe</button></td>
          <button><a href="cakeMenu.php" target="_blank" class="btn btn-info btn-lg" role="button">See All Recipe</a></button>
        </form>
      </center>
    </body>
    </html>
    