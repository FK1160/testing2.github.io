<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="css/menu5-index.css">
	<link rel="stylesheet" href="bootstrap-icons/icons-1.5.0/font/bootstrap-icons.css">
	<title>DaPilla/Home/</title>
</head>
<body>
<!--- 360px 375px 425px 768px 1024px  1440px 2560px--->
<div id="nav-box">
<br>
<div id="menu-icon">
<i id="ListMenu" onclick="showmenu(this)" style="font-size:30px; color:white;" class="bi bi-list"></i>
<i id="XMenu" onclick="showmenu(this)"  class="bi bi-x"></i>
</div>
<div id="menu-nav">
<ul>
	<i id="XMenu2" onclick="showmenu(this)"  class="bi bi-x">&nbsp;&nbsp;&nbsp;&nbsp;DaPilla</i>
	<li><a href="">Profile</a></li>
	<li><a href="">Products</a></li>
	<li><a href="">Categories</a></li>
	<li><a href="">Reviews</a></li>
	<li><a href="">About Us</a></li>
	<li><a href="">Contact Us</a></li>
</ul>
</div>
	<div id="input">
	<input type="text" name="" placeholder="Search products here......">
<div id="search">
	<i class="bi bi-search"></i>
		<a id="search_link" href="search_query.php"><i id="search_two" class="bi bi-search"></i></a>
</div>
</div>
<h1><a href="index.php">DaPilla</a></h1>

<nav id="nav">
	<ul>
		<li><a id="categories" href="#">Categories</a></li>
		<li><a href="#">Products</a></li>
		<div id="person">
			<li><i id="person-icon" onclick="dropdownprofile(this)" class="bi bi-person"></i></li>
		</div>
			<div id="arrow-down">
				<li><i id="arrow-down-icon" onclick="dropdownprofile(this)" class="bi bi-arrow-down-short"></i>
				<i id="arrow-up-icon" onclick="dropdownprofile(this)" class="bi bi-arrow-up-short"></i></li>
			</div>
			<div id="icons">
				<div id="question">
			<li><i onclick="dropdownhelpbox(this)" id="question-icon" class="bi bi-question"></i></li>
		</div>
			<div id="arrow-down2">
			<li><i id="arrow-down-icon2" onclick="dropdownhelpbox(this)" class="bi bi-arrow-down-short"></i>
		    <i id="arrow-up-icon2" onclick="dropdownhelpbox(this)" class="bi bi-arrow-up-short"></i></li>
		</div>
		</div>
	</ul>
</div>
<br><br><br><br><br><br>

<div id="DropdownProfile">
<ul>
	<li><a href="">Login</a></li>
    <li><a href="">Sign Up</a></li>
</ul>
	</div>

	<div id="DropdownHelpBox">
<ul>
	<li><a href="">Contact Us</a></li>
	<li><a href="">About U</a></li>
    <li><a href="">Feedback</a></li>
</ul>
	</div>

</body>
</html>
<script type="text/javascript">
	// for the first list and x icon
	var ShowListMenu = document.getElementById("ListMenu");
	var CloseListMenu = document.getElementById("XMenu");
	var CloseListMenu2 = document.getElementById("XMenu2");
var Menu = document.getElementById("menu-nav");
ShowListMenu.style.display = "block";
CloseListMenu.style.display ="none";
CloseListMenu2.style.display ="none";
Menu.style.display="none";

function showmenu(x) {
if(CloseListMenu.style.display == "none") {
	CloseListMenu.style.display = "block";
	CloseListMenu2.style.display = "block";
	ShowListMenu.style.display = "none";
	Menu.style.display="block";	
}
else {
	CloseListMenu.style.display = "none";
	CloseListMenu2.style.display = "none";
	ShowListMenu.style.display = "block";
	Menu.style.display="none";
}
}
// this is for when the menu nav comes up in mobile devices

// for the profile section of the nav
	var ArrowDown = document.getElementById("arrow-down-icon");
	var ArrowUp = document.getElementById("arrow-up-icon");
	var DropdownProfile  = document.getElementById("DropdownProfile");

ArrowDown.style.display = "block";
ArrowUp.style.display ="none";
DropdownProfile.style.display ="none";
function dropdownprofile(x) {
if(ArrowDown.style.display == "block") {
	ArrowDown.style.display = "none";
	ArrowUp.style.display = "block";	
	DropdownProfile.style.display ="block";
}
else {
	ArrowDown.style.display = "block";
	ArrowUp.style.display = "none";
	DropdownProfile.style.display ="none";
}
}

// for the help section of the nav

	var ArrowDown2 = document.getElementById("arrow-down-icon2");
	var ArrowUp2 = document.getElementById("arrow-up-icon2");
	var DropdownHelpBox  = document.getElementById("DropdownHelpBox");

ArrowDown2.style.display = "block";
ArrowUp2.style.display ="none";
DropdownHelpBox.style.display ="none";
function dropdownhelpbox(x) {
if(ArrowDown2.style.display == "block") {
	ArrowDown2.style.display = "none";
	ArrowUp2.style.display = "block";	
	DropdownHelpBox.style.display ="block";
}
else {
	ArrowDown2.style.display = "block";
	ArrowUp2.style.display = "none";
	DropdownHelpBox.style.display ="none";
}
}
</script>