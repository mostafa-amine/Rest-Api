<?php
require "vendor/autoload.php";

use Dotenv\Dotenv;
use Src\System\DatabaseConnector;

$dotenv = Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();


$dbConnection = (new DatabaseConnector())->getConnection();

