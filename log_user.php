<?php 

require('config.php');
   session_start();
   
   if(isset($_POST['username'])) {
      $myusername=stripslashes($_REQUEST['username']);
      $myusername = mysqli_real_escape_string($db, $myusername);
      $mypassword=stripslashes($_REQUEST['password']);
      $mypassword = mysqli_real_escape_string($db, $mypassword); 
      
      $sql = "SELECT * FROM `users` WHERE username = '$myusername' and password = '$mypassword' ";
      $result = mysqli_query($db,$sql) or die(mysql_error());
      $rows = mysqli_num_rows($result);
      
      if($rows == 1) {
         
         $_SESSION['username'] = $myusername;
       
         header("Location: dashboard.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "$error";
      }
   }

?>
<!DOCTYPE html>   
<html>   
<Html>
<Head>
<title>World Star health Care Garment</title>
<link rel="stylesheet" href="style.css"  >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</Head>
<body style=" background-image: linear-gradient(to right, #66d3fa, #d5f3fe, #3c99dc);">
<div class="menu-bar">
    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div class="logo"><img src="images\logo.jpg">
<section><h1>World Star</h1>
<h3>Health Care Garments </h3></section></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <li><a href="index.php" ><i class="fa fa-home"></i>Home</a> 
    <li><a href="products.php"><i class="fa fa-external-link"></i>Products</a>
    </li>
    <li class="active"><a href="log_user.php"><i class="fa fa-user"></i>Login</a></li>
    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i>Cart</a></li>
    </ul>
</div>
<table style="width: 40%;margin-left: auto; margin-right: auto;">
    <th >
<center> <h2> Get access to your Orders, Wishlist and Recommendations...</h2> </center>   
    <form method="POST">    
            <label>Username : </label>   

            <input type="text" placeholder="Enter Username" name="username" style="background-color: white; color:black !Important;" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" style="background-color: white; color:black !Important; width: 90%; padding: 12px 20px;" required>  <br><br>
            <input type="submit" value="Login"><br>
            New User?.<a href="userreg.php">Register Here....</a>
            <input type="checkbox" checked="checked"> Remember me   
            <input type="button" value="Cancel">  
            <a href="#">Forgot password? </a>   
         
    </form>
    </th>
    </table>     
</body>     
</html>