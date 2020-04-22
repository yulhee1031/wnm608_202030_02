<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = getRows(
	makeConn(),
	"SELECT *
	FROM `products`
	WHERE `id` = '{$_GET['id']}'
	"
);
$o = $result[0];

$thumbs = explode(",", $o->images);

// print_p($result);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Item</title>

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
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="product-main">
						<img src="img/<?= $o->thumbnail ?>" alt="">
					</div>
					<div class="product-thumbs">
					<?php

					echo array_reduce($thumbs,function($r,$o){
						return $r."<img src='img/$o'>";
					})

					?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft">
					<h2><?= $o->name ?></h2>
					<div class="product-description">
						<div class="product-price">&dollar;<?= $o->price ?></div>
					</div>

					<div>
						<a href="product_added_to_cart.php" class="form-button">Add To Cart</a>
					</div>
				</div>
			</div>
		</div>

		<div class="card soft dark">
			<h3>Description</h3>
			<div class="product-description">
				<?= $o->description ?>
			</div>
		</div>
	</div>

<div class="footer">
   		<h3>©2020 Yulhee Kim All Rights Reserved</h3>
 	</div>

</body>
</html>