<?php

include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = getData($filename);

// CRUD = CREATE READ UPDATE DELETE

// file_put_contents, json_encode, explode, $_POST


// print_p([$_GET,$_POST]);

$empty_user = (object)[
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[]
];



if(isset($_GET['action'])) {
	if($_GET['action']=="update") {
		$users[$_GET['id']]->name = $_POST['user-name'];
		$users[$_GET['id']]->type = $_POST['user-type'];
		$users[$_GET['id']]->email = $_POST['user-email'];
		$users[$_GET['id']]->classes = explode(", ",$_POST['user-classes']);

		file_put_contents($filename, json_encode($users));

		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
	}
	if($_GET['action']=="create") {
		$empty_user->name = $_POST['user-name'];
		$empty_user->type = $_POST['user-type'];
		$empty_user->email = $_POST['user-email'];
		$empty_user->classes = explode(", ",$_POST['user-classes']);

		$id = count($users);

		$users[] = $empty_user;
		// array_push($users,$empty_user);

		file_put_contents($filename, json_encode($users));

		header("location:{$_SERVER['PHP_SELF']}?id=$id");
	}
	if($_GET['action']=="delete") {

		array_splice($users, $_GET['id'], 1);

		file_put_contents($filename, json_encode($users));

		header("location:{$_SERVER['PHP_SELF']}");
	}

}





function showUserPage($user) {

$id = $_GET['id'];
$classes = implode(", ",$user->classes);
$addoredit = $id=='new' ? 'Add' : 'Edit';
$createorupdate = $id=='new' ? 'create' : 'update';



$userdata = $id=='new' ? "" : <<<HTML
<div class="card soft">
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



echo <<<HTML
<div class="card soft">
	<nav class="nav-pills">
		<ul>
			<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
			<li class="flex-stretch"></li>
			<li class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$id&action=delete">Delete</a></li>
		</ul>
	</nav>
</div>
<div class="grid gap">
	<div class="col-xs-12 col-md-4">$userdata</div>
	<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate" class="col-xs-12 col-md-8">
		<div class="card soft">
		<h2>$addoredit User</h2>
		<div class="form-control">
			<label for="user-name" class="form-label">Name</label>
			<input type="text" class="form-input" placeholder="A User Name" id="user-name" name="user-name" value="$user->name">
		</div>
		<div class="form-control">
			<label for="user-type" class="form-label">Type</label>
			<input type="text" class="form-input" placeholder="A User Type" id="user-type" name="user-type" value="$user->type">
		</div>
		<div class="form-control">
			<label for="user-email" class="form-label">Email</label>
			<input type="text" class="form-input" placeholder="A User Email" id="user-email" name="user-email" value="$user->email">
		</div>
		<div class="form-control">
			<label for="user-classes" class="form-label">Classes</label>
			<input type="text" class="form-input" placeholder="A User's Classes" id="user-classes" name="user-classes" value="$classes">
		</div>
		<div class="form-control">
			<input type="submit" value="Submit" class="form-button">
		</div>
		</div>
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
				<h1 class="logo-text">User Admin</h1>
			</div>
			<nav class="nav flex-none">
				<ul class="display-flex">
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">

		<?php

		if(isset($_GET['id'])) {

			// Conditional Ternary
			// boolean ? iftruedothis : iffalsedothis
			showUserPage(
				$_GET['id']=="new" ?
				$empty_user :
				$users[$_GET['id']]
			);

		} else {


		?>
		<div class="card soft">
		<h2>User List</h2>

		<nav class="nav">
		<ul>
		<?php

		foreach($users as $i=>$user) {
			echo "<li class='user-list'>
				<a href='admin/users.php?id=$i'>$user->name</a>
			</li>";
		}

		?>
		</ul>
		</nav>
		</div>
		<?php

		}

		?>
	</div>
	
</body>
</html>