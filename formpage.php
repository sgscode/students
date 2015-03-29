<?php

require_once '/lib/bootstrap.php';

$section = 'formpage';
$cookieXsrf = XsrfUtil::setXsrfCookie();
$student = new Student();
$emailExist = false;
$errorXsrf = '';

if ($loggedIn) {
    $student = $mapper->fetchStudentByCode($cookieCode);
}

if (isset($_POST['submit'])) {
    $formXsrf = isset($_POST['xsrfForm']) ? $_POST['xsrfForm'] : '';
    if ($formXsrf === $cookieXsrf) {
        $student->setFields($_POST);
        if ($mapper->isEmailUsed($student)) {
            $emailExist = true;
        }
        $err = $student->checkFields();
        if (!$err && !$emailExist) {
            if ($cookieCode == '') {
                createStudent($student, $mapper);
            } else {
                updateStudent($student, $mapper);
            }
        }
    } else {
        $errorXsrf = "Истек срок ожидания запроса, попробуйте снова";
    }
}

function updateStudent(Student $student, StudentMapper $mapper)
{
    $mapper->updateStudent($student);
    header('Location: listpage.php?success=update');
    die();
}

function createStudent(Student $student, StudentMapper $mapper)
{
    $student->generateCode();
    $code=$student->getCode();
    while ($mapper->isCodeExist($code)) {
        $student->generateCode();
        $code=$student->getCode();
    }
    $mapper->createStudent($student);
    setcookie('studentcode', $student->getCode(), strtotime('+5 year'), '/');
    header('Location: listpage.php?success=create');
    die();
}

include '/templates/form.php';
