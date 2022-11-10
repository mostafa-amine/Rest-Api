<?php

use Dotenv\Dotenv;
use Src\System\DatabaseConnector;


require "vendor/autoload.php";

$dotenv = Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();


$dbConnection = (new DatabaseConnector())->getConnection();

