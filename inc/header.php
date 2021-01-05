<?php include 'inc/db.php' ?>
<?php include 'inc/action.php' ?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- Additionals -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
	<style>
	</style>
	<title>Home Page</title>
</head>
<body style="background-image: url(img/Sec1bg.jpg)">
	<div class="container-fluid">
		<div class="row align-items-center bg-dark p-2 ">
			<div class="col-md-3 d-none d-md-block text-light">(+374) 077-09-69-**</div>
			<div class="col-md-3 d-none d-md-block text-light">Welcome to the store</div>
			<div class="col-md-2 col-6 d-md-block "> 
				<select class="custom-select">
					<option selected>AM</option>
					<option value="1">RU</option>
					<option value="2">EN</option>
				</select>
			</div>
			<div class="col-md-2 col-6 d-md-block ">
				<select class="custom-select">
					<option selected>֏</option>
					<option value="1">₽</option>
					<option value="2">$</option>
				</select>
			</div>
			<div class="col-md-2 col-lg-2 d-none d-md-block d-sm-none">
				<button type="button" class="btn btn-outline-light float-right">
					Wishlist <span class="badge badge-light">0</span>
				</button>
			</div>
		</div>
		<div class="row   align-items-center p-1 bg-light text-light">
			<div class="col-6 col-md-2 ">
				<a href="index.php" class="link ml-1 <?php active('');?><?php active('index.php');?>"><img src="img/tortoise_rgb.png" alt="" loading="lazy" width="100" height="50"></a>
			</div>
			<div class="col-md-8  d-none d-md-block ">
				<form class="form-inline float-right mr-3">
					<input  class="form-control mr-sm-2 bg-outline-light border-dark text-dark btn-outline-light" type="search" placeholder="Search" aria-label="Search">
					<button class="btn bg-light btn-dark my-2 my-sm-0  text-dark" type="submit">Search</button>
				</form>
			</div>
			<div class="col-6 col-md-2 pr-3 ">
				<div class="dropdown float-right ">
					<button class="btn text-dark dropdown-toggle bg-light btn-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						My account
					</button>
					<div class="dropdown-menu dropdown-menu-right " aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item <?php active('product.php');?>" href="product.php" data-toggle="modal" data-target="#exampleModal">Login</a>
			<a class="dropdown-item <?php active('product.php');?>"  href="product.php"  data-toggle="modal" data-target="#Register">Register</a>
						<a class="dropdown-item <?php active('myorders.php');?>" href="myorders.php">My Orders</a>
						<a class="dropdown-item <?php active('myaccount.php');?>" href="myaccount.php">Account Settings</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">   
			<nav class="text-center text-light align-items-center navbar navbar-expand-lg navbar-dark bg-dark col-md-12">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNabg-darkropdown" aria-controls="navbarNabg-darkropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse navbar-dark bg-dark text-light" id="navbarNabg-darkropdown">
					<ul class="navbar-nav mr-auto ml-auto ">
						<li class="nav-item dropdown text-center">
							<a class="nav-link dropdown-toggle text-light <?php active('product.php');?>" href="product.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
								Turtles
							</a>
							<div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item bg-dark text-light <?php active('product.php');?>" href="product.php">Food</a>
								<a class="dropdown-item bg-dark text-light <?php active('product.php');?>" href="product.php">Aquarium</a>
								<a class="dropdown-item bg-dark text-light <?php active('product.php');?>" href="product.php">Equipment</a>
							</div>
						</li>
						<li class="nav-item dropdown text-center">
							<a class="nav-link dropdown-toggle text-light <?php active('product.php');?>" href="product.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
								Fish
							</a>
							<div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item bg-dark text-light <?php active('product.php');?>" href="product.php">Food</a>
								<a class="dropdown-item bg-dark text-light <?php active('product.php');?>" href="product.php">Aquarium</a>
								<a class="dropdown-item bg-dark text-light <?php active('product.php');?>" href="product.php">Accessories</a>
							</div>
						</li>
						<li class="nav-item dropdown text-center">
							<a class="nav-link dropdown-toggle text-light <?php active('product.php');?>" href="product.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
								Dogs
							</a>
							<div class="dropdown-menu bg-dark text-light" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item bg-dark text-light <?php active('product.php');?>" href="product.php">Food</a>
								<a class="dropdown-item bg-dark text-light <?php active('product.php');?>" href="product.php">Toys</a>
								<a class="dropdown-item bg-dark text-light <?php active('product.php');?>" href="product.php">Beds/Kennels</a>
							</div>
						</li>
						<li class="nav-item dropdown text-center">
							<a class="nav-link dropdown-toggle text-light <?php active('product.php');?>" href="product.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
								Cats
							</a>
							<div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item bg-dark text-light <?php active('product.php');?>" href="product.php">Food</a>
								<a class="dropdown-item bg-dark text-light <?php active('product.php');?>" href="product.php">Toys</a>
								<a class="dropdown-item bg-dark text-light <?php active('product.php');?>" href="product.php">Beds/Kennels</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>