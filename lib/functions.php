<?php

const XSRF_LENGTH = 32;

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

function createXsrfCookie()
{
    $string = "qwertyuiopasdfghjklzxcvbnm1234567890";
    $strLen = mb_strlen($string);
    $newString = "";

    for ($i = 0; $i < XSRF_LENGTH; $i++) {
        $newString .= mb_substr($string, mt_rand(0, $strLen - 1), 1);
    }

    return $newString;
}

function setXsrfCookie()
{
    if (isset($_COOKIE['studentxsrf'])) {
        $cookieXsrf = $_COOKIE['studentxsrf'];
        setcookie('studentxsrf', $cookieXsrf, time() + 60 * 60 * 2, '/');
    } else {
        $cookieXsrf = createXsrfCookie();
        setcookie('studentxsrf', $cookieXsrf, time() + 60 * 60 * 2, '/');
    }
    return $cookieXsrf;
}

//highlighting word
function highlighting($string, $userSearch){
    $replaceStr = '<span style="background-color:yellow">'. $userSearch .'</span>';
    return str_replace($userSearch, $replaceStr, $string);
}