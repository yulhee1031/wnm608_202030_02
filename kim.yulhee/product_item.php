
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Item</title>

	<?php include "parts/meta.php" ?>

</head>
</head>
<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<h2>Product Item</h2>

		<div>
			This is Product <?= $_GET['id'] ?>
		</div>
		<div class="card">
			<figure class="product-figure">
				<img src="img/<?= $_GET['id'] ?>.JPG" alt="doll">
				<figcaption>
					<div>Product <?= $_GET['id'] ?></div>
				</figcaption>
			</figure>
		</div>
		
	</div>
	
	
</body>
</html>