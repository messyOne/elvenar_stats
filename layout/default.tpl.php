<?php
use Loo\Data\Settings;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Elvenar Stats</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?= Settings::getPublicUrl(); ?>style.css">
</head>
<body>
<div class="container">
	<canvas id="myChart" width="800px" height="400px"></canvas>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="my_chart.js"></script>
</html>
