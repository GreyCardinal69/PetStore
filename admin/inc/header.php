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
<style type="text/css">*{padding:0;margin:0;box-sizing:border-box;}body{font-family:'Josefin Sans',sans-serif;background-color:#f0f2f5;}img
{width:100%;}.header_top{display:flex;flex-direction:column;justify-content:center;align-items:center;}.header_top-navigation{width:100%;}
.header_top-navigation ul{list-style-type:none;display:flex;flex-direction:column;}.header_top-navigation ul li{margin-top:10px;}.header_top-navigation
ul li a{text-decoration:none;color:#000;font-size:18px;padding:15px;display:block;width:100%;text-align:center;border-radius:10px;transition:all.25s
ease;}.header_top-navigation ul li a.active{background-color:#2d88ff1a;}.header_top-navigation ul li a:hover{background-color:#2d88ff1a;}.main{
margin-left:300px;padding:15px;}.header{height:50%;}.footer{height:50%;display:flex;justify-content:center;align-items:flex-end;}.copyright{
border-top:1px solid#cccccc7a;padding:15px 0px;text-align:center;width:100%;}.main_content{width:100%;background:#fff;padding:10px;border-radius:5px;
box-shadow:0px 0px 3px #ccc;}.main_content-form{width:50%;}.main_content-form input{width:100%;height:30px;margin:10px 0px;padding:5px;border:1px solid #ccc;
border-radius:5px;}main_content-form input:focus,.main_content-form textarea:focus{border-color:#80bdff;;outline:0;background-color:#fff;box-shadow:
0 0 5px 0.2rem rgba(0,123,255,.25);}.main_content-form textarea{width:100%;height:150px;margin:10px 0px;padding:5px;border:1px solid #ccc;border-radius:5px;}
.main_content-form input[type='submit']{background-color:#32b6af;color:#fff;font-size:16px;border:none;cursor: pointer;}.text-center{text-align:center;
padding:10px 0px;}.products_table{font-family:Arial,Helvetica,sans-serif;border-collapse:collapse;width:100%;}.products_table td,.products_table th{
border:1px solid #ddd;padding:8px;}.products_table tr:nth-child(even){background-color:#f2f2f2;}.products_table tr:hover{background-color:#ddd;}
.products_table th{padding-top:12px;padding-bottom:12px;text-align:left;background-color:rgb(189,234,252);color:black;}.products_table img{width:100px;}
.btn{display:block;width:100%;color:#fff;background-color:#32b6af;padding:10px;text-align:center;border-radius:5px;text-decoration:none;position:relative;}
.btn span{z-index:3;display:block;position:relative;}.btn:before{position:absolute;content:'';top:0;left:0;width:100%;background:linear-gradient(180deg,
rgba(50,182,175,1)0%,rgba(0,255,196,1)100%);height:0%;border-radius:5px;z-index:0;transition:all.45s ease;}.btn:hover:before{height:100%;border-radius:5px;
}.error{padding:8px;background-color:#ff8192;margin-bottom:10px;border-radius:5px;color:#900707;}.success{padding:8px;background-color:#32b642;margin-bottom:10px;
border-radius:5px;color:#fff;}</style>
	<div class="wrapper">
		<div class="sidebar" style="	width: 300px;
		box-shadow: 1px 0px 3px #ccc;
		padding: 15px;
		position: fixed;
		height: 100%;
		background-image: url(css/Sec1bg.jpg);">
		<header class="header">
			<div class="header_top">
				<div class="header_top-logo" style="width: 200px;">
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