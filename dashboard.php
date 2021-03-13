<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
p {text-align: center;}
h1{text-align: center;}
h3{text-align: center;}
</style>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
<link rel="stylesheet" href="style.css" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<br>
<h1>Welcome to <br>WorldStar Health Care Garments</h1>
</head>
<body style=" background-image: linear-gradient(to right, #66d3fa, #d5f3fe, #3c99dc);">

<br>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
<br>
        <p>You are now a user <br>
        <br><h3> Get access to your Orders, Wishlist and Recommendations...</h3></p>    
  <br>        
        <p ><a href="cart.php">Shop Now</a></p>
<br>
        <p><a href="index.php">Logout</a></p>
    </div>
</body>
</html>