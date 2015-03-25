<?php

require_once '/lib/bootstrap.php';


$userSearch = isset($_GET['userSearch']) ? trim($_GET['userSearch']) : '';
$orderDirection = isset($_GET['orderDirection']) ? trim($_GET['orderDirection']): 'DESC';
$orderColumn = isset($_GET['orderColumn']) ? trim($_GET['orderColumn']) : 'scores';
$startRecord = isset($_GET['startRecord']) ? trim($_GET['startRecord']) : 0;
$success = isset($_GET['success']) ? trim($_GET['success']) : 'fail';



$mapper = new StudentMapper($DBH);
$students = $mapper->searchStudents($userSearch, $orderDirection, $orderColumn, $startRecord, $recordPerPage);
$countRecord = $mapper->getCountRecords($userSearch);
$navigator = new PageNavigator($userSearch, $orderDirection, $orderColumn, $recordPerPage, $countRecord);
$countPage = $navigator->getPageLink();
$orderColumns = $navigator->getOrderLink();



include '/templates/list.php';
