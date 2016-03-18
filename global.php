<?php

use Symfony\Component\Yaml\Yaml;

include 'vendor/autoload.php';

function getConfig() {
	$yaml = new Yaml();
	$config = $yaml->parse(file_get_contents('config.yml'));

	return $config;
}

function connectDb() {
	$config = getConfig();

	return new PDO(
		sprintf(
			'pgsql:user=%s dbname=%s password=%s host=%s',
			$config['db']['user'],
			$config['db']['db'],
			$config['db']['password'],
			$config['db']['host']
		)
	);
}
