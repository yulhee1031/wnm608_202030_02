<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = getRows(
	makeConn(),
	"SELECT *
	FROM `products`
	WHERE `id` IN (2,5,8)
	"
);

// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Cart</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<nav class="nav-crumbs" style="margin:1em 0">
			<ul>
				<li><a href="product_list.php">Back</a></li>
			</ul>
		</nav>

		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card">
				<?php
				echo array_reduce($result,'cartListTemplate');
				?>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card">
					<h2>Totals</h2>
					<div>
						<strong>Products</strong>
						<span>$13</span>
					</div>
					<div>
						<strong>Tax</strong>
						<span>$13</span>
					</div>
					<div>
						<strong>Total</strong>
						<span>$13</span>
					</div>
					<div><a href="product_checkout.php" class="form-button">Checkout</a></div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>