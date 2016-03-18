<?php

use Symfony\Component\Yaml\Yaml;

$yaml = new Yaml();
$config = $yaml->parse(file_get_contents('config.yml'));

if (isset($_GET['password']) && $_GET['password'] == $config['superpassword']) {
	$dbh = new PDO(
		sprintf(
			'pgsql:user=%s dbname=%s password=%s host=%s',
			$config['db']['user'],
			$config['db']['db'],
			$config['db']['password'],
			$config['db']['host']
		)
	);
	$dbh->query('
		CREATE TABLE public.points (
		  	date INTEGER NOT NULL,
		  	"user" CHARACTER VARYING(10) NOT NULL,
		  	points INTEGER NOT NULL DEFAULT 0,
	  	PRIMARY KEY (date, "user")
		);
	');
}
