<!doctype html>
<Html>
<Head>
<title>World Star health Care Garment</title>
<link rel="stylesheet" href="style.css"  >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</Head>
<body style=" background-image: linear-gradient(to right, #66d3fa, #d5f3fe, #3c99dc);">
<?php

session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		?>
		
<?php
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>



<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="menu-bar">
    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div class="logo"><img src="images\logo.jpg">
<section><h1>World Star</h1>
<h3>Health Care Garments </h3></section></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <li><a href="index.php" ><i class="fa fa-home"></i>Home</a> 
    <li><a href="products.php"><i class="fa fa-external-link"></i>Products</a>
    </li>
    <li><a href="log_user.php"><i class="fa fa-user"></i>Login</a></li>
   
    <li class="active">
<div>
    	<a href="cart.php"><i class="fa fa-shopping-cart"></i>Cart
<span class="cart-no"><?php echo $cart_count; ?></span>
    </a></li>
    </ul>
</div>

<div style="width:700px; margin:50 auto;">

</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "$".$product["price"]; ?></td>
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	?>
	<div class="menu-bar">
    <ul><div class="logo"><img src="images\logo.jpg">
<section><h1>World Star</h1>
<h3>Health Care Garments </h3></section></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <li><a href="index.php" ><i class="fa fa-home"></i>Home</a> 
    <li><a href="products.php"><i class="fa fa-external-link"></i>Products</a>
    </li>
    <li><a href="log_user.php"><i class="fa fa-user"></i>Login</a></li>
   
    <li class="active"><a href="cart.php"><i class="fa fa-shopping-cart"></i>Cart
    </a></li>
    </ul>

<div style="width:700px; margin:50 auto;">

</div>
<div class="h-image">
<img src="images/home1.jpg">
<div class="i-text"><section>
	<?php 
	echo "<h3>Your cart is empty!</h3>";
	?>
	<div class="a-shop"><a href="products.php">SHOP NOW</a></div></section>
	<?php
	}
	?>
	

</div>

</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


<br /><br />

</div>
</body>
</html>