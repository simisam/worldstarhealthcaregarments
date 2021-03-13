<?php

session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
    $code=>array(
    'name'=>$name,
    'code'=>$code,
    'price'=>$price,
    'quantity'=>1,
    'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    function function_alert($message) { 
    echo "<div class='box'><script>alert('$message');</script></div>"; 
} 
function_alert("Product is added to your cart!"); 
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
        $status = "<div class='box' style='color:red;'>
        Product is already added to your cart!</div>";  
    } else {
    $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
    $status = "<div class='box'>Product is added to your cart!</div>";
    }

    }
}
?>
<!doctype html>
<Html>
<Head>
<title>World Star health Care Garment</title>
<link rel="stylesheet" href="style.css"  >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</Head>
<body style=" background-image: linear-gradient(to right, #66d3fa, #d5f3fe, #3c99dc);">
<div class="menu-bar">
    <ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div class="logo"><img src="images\logo.jpg">
<section><h1>World Star</h1>
<h3>Health Care Garments </h3></section></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <li><a href="index.php" ><i class="fa fa-home"></i>Home</a> 
    <li class="active"><a href="products.php"><i class="fa fa-external-link"></i>Products</a>
    </li>
    <li><a href="log_user.php"><i class="fa fa-user"></i>Login</a></li>
    
<li> <div>
    
<a href="cart.php"><i class="fa fa-shopping-cart"></i>Cart<span class="cart-no">
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?> 
<?php echo $cart_count; ?></span></a>

</div>
<?php
}
?>
</li>
</ul>

</div>
    
<div style="width:700px; margin:50 auto;">
<h2 align="center">Products</h2>   

<?php
$result = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
        echo "<div class='product_wrapper'>
              <form method='post' action=''>
              <input type='hidden' name='code' value=".$row['code']." />
              <div class='p-image'><img src='".$row['image']."' width='150' height='200'/></div>
              <div class='p-name'>".$row['name']."</div>
              <div class='p-price'>$".$row['price']."</div>
              <button type='submit' class='buy'>Buy Now</button>
              </form>
              </div>";
        }
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<br /><br />

</div>
</body>
</html>