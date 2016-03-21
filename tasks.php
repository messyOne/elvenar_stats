#!/usr/bin/env php

<?php

include_once 'bootstrap.php';

use Loo\Task\DatabaseSetup;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new DatabaseSetup());

$application->run();
