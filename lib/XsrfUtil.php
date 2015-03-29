<?php

class XsrfUtil
{

    const XSRF_LENGTH = 32;
    
    private static function createXsrfCookie()
    {
        $string = "qwertyuiopasdfghjklzxcvbnm1234567890";
        $strLen = mb_strlen($string);
        $newString = "";

        for ($i = 0; $i < self::XSRF_LENGTH; $i++) {
            $newString .= mb_substr($string, mt_rand(0, $strLen - 1), 1);
        }

        return $newString;
    }

    public static function setXsrfCookie()
    {
        if (isset($_COOKIE['studentxsrf'])) {
            $cookieXsrf = $_COOKIE['studentxsrf'];
            setcookie('studentxsrf', $cookieXsrf, time() + 60 * 60 * 2, '/');
        } else {
            $cookieXsrf = self::createXsrfCookie();
            setcookie('studentxsrf', $cookieXsrf, time() + 60 * 60 * 2, '/');
        }
        return $cookieXsrf;
    }

}
