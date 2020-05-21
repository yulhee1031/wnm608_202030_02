
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Landing Page</title>

	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>

	<div class="view-window" style="background-image:url(img/main_img.jpg)"></div>

	<div class="texts">
		<h2>Dona's Favorite</h2>
	</div>
	<div class="container">
		<div class="grid gap">
			<div class="col-lg-4 col-xs-12">
				<figure class="product-main">
					<a href="product_item.php?id=1">
						<img src="img/stuffed_animal_1.JPG" alt="doll">
					</a>
					<figcaption>
						<div>Brown Teddy Bear</div>
						<div>$7.00</div>
					</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-xs-12">
				<figure class="product-main">
					<a href="product_item.php?id=2">
						<img src="img/stuffed_animal_2.JPG" alt="doll">
					</a>
					<figcaption>
						<div>Cute White Sheep</div>
						<div>$7.00</div>
					</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-xs-12">
				<figure class="product-main">
					<a href="product_item.php?id=3">
						<img src="img/stuffed_animal_3.JPG" alt="doll">
					</a>
					<figcaption>
						<div>My First Puppy</div>
						<div>$7.00</div>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="main-photo grid gap">
			<div class="col-lg-6 col-xs-12">
				<img src="img/main1.JPG" class="photo">
			</div>
			<div class="col-lg-6 col-xs-12">
				<a href="about.php"> <img src="img/main2.JPG" class="photo"></a>
			</div>
		</div>
	</div>

    <?php include "parts/footer.php" ?>

</body>
</html>