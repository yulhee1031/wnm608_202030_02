<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Added To Cart</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">
			<h2>Cart Confirmation</h2>

			<div>
				Thank you for adding Product <?= $_GET['id'] ?> to cart.
			</div>

			<div>
				<a href="product_list.php" class="form-button">Back to Shopping</a>
			</div>
		</div>
	</div>
	
</body>
</html>