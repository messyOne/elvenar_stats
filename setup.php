<?php

include 'global.php';

$config = getConfig();

if (isset($_GET['password']) && $_GET['password'] == $config['superpassword']) {
	$dbh = connectDb();
	$dbh->query('
		CREATE TABLE public.points (
		  	date INTEGER NOT NULL,
		  	"user" CHARACTER VARYING(10) NOT NULL,
		  	points INTEGER NOT NULL DEFAULT 0,
	  	PRIMARY KEY (date, "user")
		);
	');
}
