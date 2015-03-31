<?php

require_once '/lib/bootstrap.php';


$phpSelf=$_SERVER['PHP_SELF'];
$section = 'listpage';
$userSearch = isset($_GET['userSearch']) ? trim($_GET['userSearch']) : '';
$orderDirection = isset($_GET['orderDirection']) ? trim($_GET['orderDirection']) : 'DESC';
$orderColumn = isset($_GET['orderColumn']) ? trim($_GET['orderColumn']) : 'scores';
$startRecord = isset($_GET['startRecord']) ? trim($_GET['startRecord']) : 0;
$success = isset($_GET['success']) ? trim($_GET['success']) : 'fail';

try {
    $students = $mapper->searchStudents($userSearch, $orderDirection, $orderColumn, $startRecord, $recordPerPage);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

$countRecord = $mapper->getCountRecords($userSearch);
$navigator = new PageNavigator($userSearch, $orderDirection, $orderColumn, $recordPerPage, $countRecord, $phpSelf);
$countPage = $navigator->getPageLink();
$orderColumns = $navigator->getOrderLink();



include '/templates/list.php';
