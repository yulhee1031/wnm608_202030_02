<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");




function showUserPage($user) {
$classes = implode(", ",$user->classes);
echo <<<HTML
<div>
	<a href="admin/users.php">Back</a>
</div>
<div>
	<h2>$user->name</h2>
	<div>
		<strong>Type</strong>
		<span>$user->type</span>
	</div>
	<div>
		<strong>Email</strong>
		<span>$user->email</span>
	</div>
	<div>
		<strong>Classes</strong>
		<span>$classes</span>
	</div>
</div>
HTML;
}



?><!DOCTYPE html>
<html lang="en">
<head>
	<title>User Admin</title>

	<?php include "../parts/meta.php" ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>User Admin</h1>
			</div>
			<nav class="nav flex-none">
				<ul class="display-flex">
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="card soft">

			<?php

			if(isset($_GET['id'])) {

				showUserPage($users[$_GET['id']]);

			} else {


			?>

			<h2>User List</h2>

			<ol>
			<?php

			foreach($users as $i=>$user) {
				echo "<li>
					<a href='admin/users.php?id=$i'>$user->name</a>
				</li>";
			}

			?>
			</ol>

			<?php

			}

			?>
		</div>
	</div>
	
</body>
</html>