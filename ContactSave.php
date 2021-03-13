<?php
session_start();
$cname=$_POST['name'];
$cemail=$_POST['email'];
$cphone=$_POST['phone'];
$cmessage=$_POST['message'];


$conn=mysqli_connect("localhost","root","","healthcare");


 $sql = "INSERT INTO contact (name,email,phone,message) VALUES ('$cname','$cemail','$cphone','$cmessage')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record saved successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }



?>


/*<?php

$nameerr = $emailerr = $phoneerr = "";
$count = 0;


do{
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$conn=mysqli_connect("localhost","root","","healthcare");

$cname=$_POST['name'];
$cemail=$_POST['email'];
$cphone=$_POST['phone'];
$cmessage=$_POST['message'];

 if (!preg_match("/^[a-zA-Z]*$/",$cname)) {
      $nameerr = "Only letters and white space allowed";
	$count=$count+1;
    }

if (!filter_var($cemail, FILTER_VALIDATE_EMAIL)) {
 
  $emailerr="Please enter valid email address";
$count=$count+1;
}

if(!preg_match("/^[0-9]{10}+$/", $cphone)){
$phoneerr="Please enter valid phone number";
$count=$count+1;
}
if($count==0){
 $sql = "INSERT INTO contact (name,email,phone,message) VALUES ('$cname','$cemail','$cphone','$cmessage')";
	 if (mysqli_query($conn, $sql)) {
   $count=4;
		echo "New record saved successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	}
}
}while($count==4);

?>*/



