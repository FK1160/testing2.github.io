<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DaPilla/Search-Products</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="bootstrap-icons/icons-1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/search.css">
</head>
<body>
<div id="SearchMain">
<div id="SearchBox">
	<div id="SearchContent">
<i onclick="history.go(-1)" class="bi bi-arrow-left"></i>
<input type="text" name="search_products" placeholder="Search products" autofocus>
<i class="bi bi-x"></i>
</div>
</div>
</div>
</body>
</html>