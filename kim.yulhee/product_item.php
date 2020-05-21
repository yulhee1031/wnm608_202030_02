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
					<div class="product-item">
						<img src="img/<?= $o->thumbnail ?>" alt="">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<form class="card soft flat" method="get" action="data/form_actions.php">
					<div class="card-section">
						<h2><?= $o->name ?></h2>
						<div class="product-description">
							<div class="product-price">&dollar;<?= $o->price ?></div>
						</div>
					</div>

					<div class="card-section">
						<label class="form-label">Amount</label>
						<select name="amount" class="form-button">
							<!-- option*10>{$} -->
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>

					<div class="card-section">
						<input type="hidden" name="action" value="add-to-cart">
						<input type="hidden" name="id" value="<?= $o->id ?>">
						<input type="hidden" name="price" value="<?= $o->price ?>">
						<input type="submit" class="form-button" value="Add To Cart">
					</div>
				</form>
			</div>
		</div>

		<div class="card soft dark">
			<h3>Description</h3>
			<div class="product-description">
				<?= $o->description ?>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php" ?>
	
</body>
</html>
