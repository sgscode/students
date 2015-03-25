<?php

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

function createXsrfCookie()
{
    $string = "qwertyuiopasdfghjklzxcvbnm1234567890";
    $strLen = mb_strlen($string);
    $newString = "";

    for ($i = 0; $i < 32; $i++) {
        $newString .= $string[mt_rand(0, $strLen - 1)];
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
function hlw($string, $userSearch){
    $replaceStr = '<span style="background-color:yellow">'. $userSearch .'</span>';
    return str_replace($userSearch, $replaceStr, $string);
}