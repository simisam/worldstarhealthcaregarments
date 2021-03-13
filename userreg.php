
<!DOCTYPE html>
<html lang="en">
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
      <div class="form-design">
      <form action="database.php" method="POST">
        <?php //include('errors.php') ?>
       
          <h1>Registration</h1>
        <p>Fill up the registration form</p>
        <hr class="mb-3">
        <label for="username"><b>Username</b> </label>
        <input type="text" name="username" style="background-color: white; color:black !Important;" required/>

        <label for="email"><b>Email Id</b> </label>
        <input type="email" name="email" style="background-color: white; color:black !Important;" required/>

        <label for="phoneno"><b>Phone Number</b> </label>
        <input type="text" name="phoneno" style="background-color: white; color:black !Important;" required />

        <label for="password"><b>Password</b> </label>
        <input type="password" name="password" style="background-color: white; color:black !Important; width: 90%; padding: 12px 20px;" required />

        <label for="passwordConfirm"><b>Confirm Password</b> </label>
        <input type="password" name="passconf" style="background-color: white; color:black !Important; width: 90%; padding: 12px 20px;" required />

        <hr class="mb-3">
        <input class="btn btn-primary" type="submit"  name="create" value="Register" />
        <p><b>Already a user? </b><a href="log_user.php"><b>Log in</b></a></p>
      </form>
    </div>
    </th>
  </table>
    </div> 
  


</body>
</html>
