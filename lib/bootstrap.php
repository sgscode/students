<?php

require 'lib/config.php';
require_once 'lib/functions.php';
spl_autoload_register(function ($class) {
    include 'lib/' . $class . '.php';
});

$DBH = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$section = '';
$cookieCode = isset($_COOKIE['studentcode']) ? $_COOKIE['studentcode'] : '';

switch ($_SERVER['PHP_SELF']) {
    case '/listpage.php':
        $section = 'listpage';
        break;
    case '/formpage.php':
        $section = 'formpage';
        break;
}


