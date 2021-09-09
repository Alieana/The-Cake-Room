<?php
  include "db_connect.php";
  $conn=mysqli_connect('localhost','root','','dbcakeroom');
  $query = "SELECT * FROM cake_menu ORDER BY cake_id ASC";
  $result = mysqli_query($conn,$query) or die("Query failed");  // SQL statement for checking
  //$result = $conn->query($query);
  /*if(isset($_POST['search']))
    {*/
      $id = $_GET['id'];
      $sql = "SELECT * FROM cake_menu WHERE cake_id LIKE '$id'";
      $result = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_array($result))
      {
        $id = $row['cake_id'];
        $name = $row['name'];
        $cakename = $row['cake_name'];
        $cakecat = $row['cake_category'];
        $cakedate = $row['cake_date'];
        $cakeingre = $row['cake_ingredient'];
        $cakerecipe = $row['cake_recipe'];
        $cakeimg = $row['cake_img'];
      }
    //}
  ?>
<!DOCTYPE>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
  <title>The Cake Room|Recipe</title>
  <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
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
      background: black;
      color: white;
      display:inline-block;
      padding:3px 15px;
      margin-left:10px;
    }
    /* Center website */
.main 
{
  max-width: 1000px;
  margin: auto;
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
  <table>
    <tr>
      <td><center><?php echo '<img style="width:55%" src="data:image/;base64,'.$cakeimg.'">';?></center></td>
      <td><h4 style="color: white">Cake Ingredient : <br><?php echo $cakeingre;?></h4></td>
    </tr>
    <tr>
      <td width="20%"><h4 style="color: white">Cake Name: <?php echo $cakename;?></h4></td>
      <td rowspan="4"><h4 style="color: white">Cake Recipe: <br><?php echo $cakerecipe;?></h4></td>

      <tr>
      <td><h4 style="color: white">Cake Category: <?php echo $cakecat;?></h4></td>
    </tr>
    <tr>
      <td><h4 style="color: white">Date Upload: <?php echo $cakedate;?></h4></td>
      <tr>
      <td><h4 style="color: white">Upload by: <?php echo $name;?></h4></td>
    </tr>
    </tr>
  </table>
  </body>
  </html>
