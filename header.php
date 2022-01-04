<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="bootstrap-icons/icons-1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="css/index5.css">
	<link rel="stylesheet" type="text/css" href="css/section4.css">
	<link rel="stylesheet" type="text/css" href="css/search3.css">
	<title>DaPilla/Home</title>
</head>
<body id="Body" onclick="bodyclick()">
<header>
	<!-- this is for  laptops nav-->
<nav onclick="togglemenuclick()">
	<div id="navbar1">
		<div id="head_name">
<a href="index.html"><img style="width:100px;" src="logo/logo.png"></a>
</div>

<input type="text" name="search_products"><i class="bi bi-search"></i>
<ul>
	
	<li><a href="index.html">Home</a></li>
	<li><a href="">Categories</a></li>
</ul>
<div id="icons">
	<i id="person" onclick="showpersonbox(this)" class="bi bi-person"></i>
	<i id="arrow1" onclick="showpersonbox(this)"  class="bi bi-arrow-down-short"></i>
	<i id="arrow2" onclick="showpersonbox(this)" class="bi bi-arrow-up-short"></i>
	<i onclick="showhelpbox(this)" class="bi bi-question-circle"></i>
</div>
</div>
<!-- this is for the end of laptops nav-->
<!-- this is for the  phones nav-->
	<div id="navbar2">
	<i id="List" onclick="showmenu(this)" class="bi bi-list"></i>
<a href="index.html"><img style="width:100px;" src="logo/logo.png"></a>
<div id="search_icon">
	<i onclick="searchform(this)" class="bi bi-search"></i>
</div>
	</div>
	<!-- this is for the end phones nav-->
</nav>
</header>
<br><br><br><br><br><br>
<div id="SearchMain">
<div id="SearchBox">
	<div id="SearchContent">
<i onclick="closesearchform(this)" class="bi bi-arrow-left"></i>
<form action="search.php" method="POST">
<input id="inputBoxMain" class=" inputBox" type="text" name="search_products" placeholder="Search awesome products">
</form>
<i id="Xbtn" onclick="RemoveWordInInput()" class="bi bi-x"></i>

</div>
</div>
</div>
<!-- this is for  laptops-->
<div id="PersonBoxMain">
<div id="person-box">
<ul>
	<li><a href="#">Login</a></li>
		<li><a href="#">Sign Up</a></li>
</ul>
</div>
</div>
<!-- this is for the end laptops-->
<!-- this is for  laptops-->
<div id="HelpBoxMain">
<div id="help-box">
<ul>
	<li><a href="#">About Us</a></li>
		<li><a href="#">Contact Us</a></li>
		<li><a href="#">Ask A Question?</a></li>	
</ul>
	</div>
</div>
<!-- this is for the end laptops-->
<!-- this is for the menu of phones-->
<div id="MenuMain" onclick="togglemenuclick2()">
<div id="MenuBox">
<ul>
	<center>
	<a style="margin-top: -10px; margin-left: -70px;" href="index.html"><img style="width:100px;" src="logo/logo.png">
</a>
</center>
	<a href="#"><li>Home</li></a>
	<br>
	
	<a href="#"><li>Products</li></a>
	<br>
	
	<a href="#"><li>Categories</li></a>
	<br>
	
	<a href="#"><li>Take Our Tour Guide</li></a>
	<br>

	<a href="#"><li>Login</li></a>
	<br>
	
	<a href="#"><li>Sign Up</li></a>
	<br>
	
	<a href="#"><li>About Us</li></a>
	<br>
	
	<a href="#"><li>Contact Us</li></a>
	<br>
	
	<a href="#"><li>Ask A Question?</li></a>
	<br>
	<br>
</ul>
<center>
<div id="text_info">
<p>DaPilla Essentials &copy; 2022- </p>
<p>All rights reserved.</p>
</div>

<div id="links_icons">
	<a href=""><i class="bi bi-facebook"></i></a>
	<a href=""><i class="bi bi-whatsapp"></i></a>
	<a href=""><i class="bi bi-instagram"></i></a>
	<a href=""><i class="bi bi-twitter"></i></a>
	<a href=""><i class="bi bi-telegram"></i></a>
	<br>
	<p><i class="bi bi-phone"></i>&nbsp;&nbsp;<a id="phone" href="#">+234 973 8383 383</a></p>
		<p><i class="bi bi-phone"></i>&nbsp;&nbsp;<a href="#">+234 343 8903 005</a></p>
	
		<br>
	</div>
</div>
</center>
</div>