<?php
use Symfony\Component\Yaml\Yaml;

include 'vendor/autoload.php';

session_set_cookie_params(3600*24*365);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin area</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css?version=1">
</head>
<body>
<div id="main-container" class="container">
	<form class="col-lg-4 col-lg-offset-4" method="post">
		<div class="form-group">
			<label for="user-1">messy</label>
			<input type="number" class="form-control" name="user-1" placeholder="0" >
		</div>
		<div class="form-group">
			<label for="user-2">firegate666</label>
			<input type="number" class="form-control" name="user-2" placeholder="0" >
		</div>
		<div class="form-group">
			<label for="user-3">lensboy</label>
			<input type="number" class="form-control" name="user-3" placeholder="0" >
		</div>
		<div class="form-group">
			<label for="user-4">adler94</label>
			<input type="number" class="form-control" name="user-4" placeholder="0" >
		</div>

		<?php if (!isset($_SESSION['logged_in'])): ?>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
		<?php endif; ?>

		<input type="submit" value="Submit" name="submit" class="btn btn-default">
	</form>
</div>
</body>
</html>

<?php

$yaml = new Yaml();
$config = $yaml->parse(file_get_contents('config.yml'));

var_dump($config);

if (isset($_POST['submit']) && ($_SESSION['logged_in'] || $_POST['password'] == 'test')) {
	$_SESSION['logged_in'] = true;

	$dbh = new PDO('pgsql:user=docker dbname=docker password=docker host=db');
	$stmt = $dbh->prepare('
		INSERT INTO points (date, "user", points) VALUES
			(:date, :user, :points)
		ON CONFLICT (date, "user")
		DO UPDATE SET points = EXCLUDED.points + 1
	');
	$stmt->bindParam(':date', $date);
	$stmt->bindParam(':user', $user);
	$stmt->bindParam(':points', $points);

	$date = 123;
	$user = 'test';
	$points = 123;
	$stmt->execute();
}
?>
