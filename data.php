<?php

include 'global.php';

$dbh = connectDb();
$result = [];

switch ($_GET['type']) {
	case 'label':
		$sth = $dbh->prepare('
			SELECT DISTINCT date from points
		');
		$sth->execute();

		foreach ($sth->fetchAll() as $row) {
			$result[] = date('d.m.Y');
		}
		break;
	case 'user':

	default:
		$result = 'Nope';
}


header('Content-Type: application/json');
echo json_encode($result);
