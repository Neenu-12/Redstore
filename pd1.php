<?php include('s1.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale= 1.0">
	<title> All Products -URcart </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include('header.php'); ?>

<!-----single product details---->
<div class="small-container single-product">
	<div class="row">
		<div class="col-2">
			<img src="images/p2.1.webp" width="100%" id="productimg">
			<div class="small-img-row">
				<div class="small-img-col">
					<img src="images/p2.1.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p2.2.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p2.3.webp" width="100%" class="smallimg">
				</div>
				<div class="small-img-col">
					<img src="images/p2.4.webp" width="100%" class="smallimg">
				</div>
			</div>
		</div>
		<div class="col-2">
			<p>Home / T-Shirt</p>
			<h1> Red Printed T-Shirt</h1>
			<h4>$50.00</h4>
			<form action="pd1.php" method="post"> <button type="submit" name="sale" class="btn">Buy now</button></form>
			<h3>Product Details <i class="fa fa-indent" aria-hidden="true"></i></h3>
			<br>
			<p>Constructed from a durable yet lightweight polyester, the HRX Men's Running T-shirt is ideal for the active urban man. It's sweat wicking technology keeps you dry till the time you cross the finish line so that you can focus solely on getting ahead</p>
		</div>
	</div>
</div>
<!-----title---->
<div class="container">
	<div class="row row-2">
		<h2>You May Also Like</h2>
		<a href="products.php"><p>View More</p></a>
	</div>
</div>
	<div class="small-container">
		
		<div class="row">
			<div class="col-4">
				<img src="images/product-9.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-10.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-11.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-12.jpg">
				<h4>Red Printed T-Shirt</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$50.00</p>
			</div>
		</div>
	</div>
</div>

<!-----footer---->
<?php include('footer.php'); ?>

<!-----js for product gallery---->
<script>
	var productimg = document.getElementsById("productimg");
	var smallimg = document.getElementsByClassName("smallimg");
	smallimg[0].onclick = function(){
		productimg.src = smallimg[0].src
	}
	smallimg[1].onclick = function(){
		productimg.src = smallimg[1].src
	}
	smallimg[2].onclick = function(){
		productimg.src = smallimg[2].src
	}
	smallimg[3].onclick = function(){
		productimg.src = smallimg[3].src
	}
</script>
</body>
</html>