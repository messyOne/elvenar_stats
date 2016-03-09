<?php
	session_set_cookie_params(3600*24*365);
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin area</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<form class="col-lg-4 col-lg-offset-4" method="post">
		<div class="form-group">
			<label for="user-1">messy</label>
			<input type="number" class="form-control" id="user-1" placeholder="0">
		</div>
		<div class="form-group">
			<label for="user-2">firegate666</label>
			<input type="number" class="form-control" id="user-2" placeholder="0">
		</div>
		<div class="form-group">
			<label for="user-3">lensboy</label>
			<input type="number" class="form-control" id="user-3" placeholder="0">
		</div>
		<div class="form-group">
			<label for="user-4">adler94</label>
			<input type="number" class="form-control" id="user-4" placeholder="0">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" placeholder="Password">
		</div>

		<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
</body>
</html>
