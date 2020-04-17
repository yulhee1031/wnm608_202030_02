<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = getRows(
	makeConn(),
	"SELECT *
	FROM `products`
	ORDER BY `date_create` DESC
	LIMIT 12
	"
);

// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>

	<?php include "parts/meta.php" ?>

</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">
			<h4><p>Welcome to Dona Land!</p>
			Our products have good conditions. We always sterilize and send the product before shipping it.</h4>
			<h2>Product List</h2>
			<div class="grid gap">
			<?php

			echo array_reduce($result,'productListTemplate');

			?>
			</div>
		</div>
	</div>

	<div class="footer">
   		<h3>©2020 Yulhee Kim All Rights Reserved</h3>
 	</div>
	
</body>
</html>