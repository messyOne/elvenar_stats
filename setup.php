<?php

use Symfony\Component\Yaml\Yaml;

$yaml = new Yaml();
$config = $yaml->parse(file_get_contents('config.yml'));

if (isset($_GET['password']) && $_GET['password'] == $config['superpassword']) {
	$dbh = new PDO('pgsql:user=docker dbname=docker password=docker host=localhost');
	$dbh->query('
		CREATE TABLE IF NOT EXISTS public.data (
		  date CHARACTER VARYING(8) PRIMARY KEY NOT NULL,
		  points INTEGER NOT NULL DEFAULT 0
		);
		CREATE UNIQUE INDEX data_date_uindex ON data USING BTREE (date);
	');
}
