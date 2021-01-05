<?php include 'db.php'; ?>
<?php include 'action.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="sidebar">
			<header class="header">
				<div class="header_top">
					<div class="header_top-logo">
						<img src="../img/tortoise_rgb.png" alt="">
					</div>
					<div class="header_top-navigation">
						<ul>
							<li><a href="index.php" class="<?php active('');?><?php active('index.php');?>">Products</a></li>
							<li><a href="add.php" class="<?php active('add.php');?>">Add New Product</a></li>
							<li><a href="../index.php" target="_blank">Home Page</a></li>
						</ul>
					</div>
				</div>
			</header>
			<footer class="footer">
				<div class="copyright">
					<p>By &copy; Mikayel Kananov</p>
				</div>
			</footer>
		</div>