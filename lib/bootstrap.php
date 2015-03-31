<?php

require 'lib/config.php';
require_once 'lib/functions.php';
spl_autoload_register(function ($class) {
    if (file_exists('lib/' . $class . '.php')) {
        include 'lib/' . $class . '.php';
    }
});

$DBH = new PDO("mysql:host=$dbHost;dbname=$dbName; charset=utf8", $dbUser, $dbPass);
$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$mapper = new StudentMapper($DBH);

$section = '';
$cookieCode = isset($_COOKIE['studentcode']) ? $_COOKIE['studentcode'] : '';
$loggedIn = $mapper->isCodeExist($cookieCode);


