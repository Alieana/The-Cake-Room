<?php
  include 'db_connect.php';
  $query = "SELECT * FROM cake_menu ORDER BY cake_id ASC";
  $result = mysqli_query($conn,$query) or die("Query failed");
?>

<!DOCTYPE>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
	<title>The Cake Room|Cakes</title>
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

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #838060;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: #838060;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: ##838060;
  min-width: 130px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 10px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #838060;}

.dropdown:hover .dropdown-content {
  display: block;
}


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