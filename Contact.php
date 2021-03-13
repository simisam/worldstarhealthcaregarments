<!doctype html>
<Html>
<Head>
<title>World Star health Care Garment</title>
<link rel="stylesheet" href="style.css"  >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</Head>
<body bgcolor="#707070">

<div class="menu-bar">
	<ul>
	<li><a href="Index.php"><i class="fa fa-home"></i>Home</a></li>
	<li><a href="About.php"><i class="fa fa-user"></i>About Us</a></li>
	<li><a href="#"><i class="fa fa-external-link"></i>Products</a>
	<div class="sub-menu1">
		<ul>
		<li class="hover-me"><a href="#">COAT <i class="fa fa-angle-right"></i></a>
		<div class="sub-menu2">
			<ul>
			<li><a href="#">DOCTOR COAT</a></li>
			<li><a href="#">LAB COAT</a></li>
			<li><a href="#">WAIST COAT</a></li>
			</ul>
		</div>
	</li>
	<li class="hover-me"><a href="#">GOWN <i class="fa fa-angle-right"></i></a>
		<div class="sub-menu2">
		<ul>
		<li><a href="#">SURGERY GOWN GREEN</a></li>
		<li><a href="#">ORTHO GOWN</a></li> 
		<li><a href="#">PATIENT GOWN B/O</a></li> 
		<li><a href="#">NIGHTY GOWN</a></li>
		</ul>
		</div>
	</li>
	<li><a href="#">NURSE UNIFORMS</a></li>
	<li><a href="#">SCRUB SUITS</a></li>
	<li><a href="#">PLASTIC APRON</a></li> 
	</ul>
	</div>
	</li>
	<li class="active"><a href="Contact.php"><i class="fa fa-phone"></i>Contact</a></li>
	</ul>
</div>
<br>

<table width="80%" height="80%" color="#101010">
<th width="50%" height="50%"><h2>Contact Us</h2>
<br>
28/66C/3, World star, Water Tank Road<br>
Sinclair Street Marthandam<br>
Cell  : +91-9442237180, 9443127180,9489548987<br>
Phone : 04651-271480<br></th>
<th align="center" width="50%" height="50%">

&nbsp&nbsp&nbsp
<form action="ContactSave.php" method="post">
<input type="text" id="name" name="name" placeholder="Name" Required><span></span></br>
<input type="text" id="address" placeholder="Address" name="address" Required></br>
<input type="email" id="email" placeholder="Email" name="email" Required></br>
<input type="phone" id="phone" placeholder="Phone" name="phone" Required></br>
<input type="text" id="subject" placeholder="Subject" name="subject" Required></br>
<input type="textarea" id="message" placeholder="Type your message here" name="message" Required>
<input type="submit" value="Submit" name="submit">
</form>

</th>
</table>

</body>
</html>