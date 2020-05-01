<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product List</title>

	<?php include "parts/meta.php" ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/list.js"></script>
</head>
<body>

	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">
			<div class="product_list_title">
				<h2>Product List</h2>
				Welcome to Dona Land!<br>
				Our products have good conditions. We always sterilize and send the product before shipping it.<p>
			</div>

			<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" class="search" placeholder="Search Products">
			</form>
			</div>
			<div class="form-control display-flex">
				<div class="flex-none">
					<button type="button" class="form-button js-filter" data-column="category" data-value="">All</button>
				</div>
				<div class="flex-none">
					<button type="button" class="form-button js-filter" data-column="category" data-value="stuffedanimals">Stuffed Animals</button>
				</div>
				<div class="flex-none">
					<button type="button" class="form-button js-filter" data-column="category" data-value="dolls">Dolls</button>
				</div>
			</div>
			<div class="form-control">
				<!-- .form-select>select>option -->
				<div class="form-select">
					<select class="js-sort">
						<option value="1">Newest</option>
						<option value="2">Oldest</option>
						<option value="3">Most Expensive</option>
						<option value="4">Least Expensive</option>
					</select>
				</div>
			</div>


			<div class="grid gap productlist"></div>
		</div>
	</div>

	<div class="footer">
   		<h3>©2020 Yulhee Kim All Rights Reserved</h3>
 	</div>
	
</body>
</html>