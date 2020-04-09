<?php

include "../lib/php/functions.php";

$users = getData("../data/users.json");




function showUserPage($id, $user) {
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
	<div>
		<a href="admin/users.php?id=$id&edit=true">Edit</a>
	</div>
</div>
HTML;
}

function showUserEditPage($id, $user) {
$classes = implode(", ",$user->classes);
echo <<<HTML
<div>
	<a href="admin/users.php?id=$id&edit=false">Back</a>
</div>
<div>
	<h2>$user->name</h2>
	<form action="" class="form form-control" method="post">
		<label for="type">Type</label>
		<input class="form-basic" type="text" id="type" name="type" value=$user->type>
		<label for="email">Email</label>
		<input class="form-basic" type="text" id="email" name="email" value=$user->email>
		<label for="classes">Classes</label>
		<input class="form-basic" type="text" id="classes" name="classes" value=$classes>
		<input class="form-basic-button" type="submit" name="submit" value="submit">
	</form>
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
				<img src="img/logo.png" alt="logo" width="50px" style="padding-top: 20px;">
				<h4 style="display: inline-block; padding-bottom:0px; margin-bottom:0px;">User Admin</h4>
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

			if(isset($_GET['edit'])) {

				if ($_GET['edit'] == 'true') {

					showUserEditPage($_GET['id'], $users[$_GET['id']]);

				} else {

					showUserPage($_GET['id'], $users[$_GET['id']]);

				}

			} else {

			?>

			<h2>User List</h2>

			<ol>
			<?php

			foreach($users as $i=>$user) {
				echo "<li>
					<a href='admin/users.php?id=$i&edit=false'>$user->name</a>
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