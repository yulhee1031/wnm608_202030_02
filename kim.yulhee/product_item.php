
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store: Product Item</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="css/storetheme.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>
</head>
<body>

	<?php include "parts/navbar.php" ?>
	

	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>

			<div>
				This is Product <?= $_GET['id'] ?>
			</div>
		</div>
	</div>
	
	
</body>
</html>