<?php
  include "db_connect.php";
  $conn=mysqli_connect('localhost','root','','dbcakeroom');  // SQL statement for checking
  //$result = $conn->query($query);

  	if(isset($_POST['submit_search'])) {
		$search = mysqli_real_escape_string($conn, $_POST['searchCake']);
		$sql = "SELECT * FROM cake_menu WHERE cake_name LIKE '$search' OR cake_category LIKE '$search'";
		$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
	<title>The Cake Room | Cakes</title>
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<style>
img {
  border-radius: 50%;
}

* {
  box-sizing: border-box;
}

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

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: #e3e0cc;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
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
  <form action="searchCake.php" method="POST" >
    <input type="text" name="searchCake" required placeholder="Search cake name..">
    <br><br>
    <button type = "submit" name="submit_search" >SEARCH</button>
  </form>
<?php
while ($row = mysqli_fetch_array($result))
  { $image = $row['cake_img']; ?>
  <center>
    <div class="row">
      <div class="column nature">
        <div class="content">
          <?php echo '<img style="width:55%" src="data:image/;base64,'.$row['cake_img'].'">';?>
          <h4 style="color: #7e4a35"><?php echo $row['cake_name'];?></h4>
          <p><a href="login.html"><input type="button" value="Get Recipe"></a></p>
        </div>
      </div>
<?php
}
}
?>
    </div>
<!-- END GRID -->
</div>
<!-- END MAIN -->
</div>
</center>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}
</script>
</body>
</html>