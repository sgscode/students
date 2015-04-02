<?php

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

function highlighting($string, $userSearch)
{
    if ($userSearch) {
        $startIndex = mb_stripos($string, $userSearch);
        $lengthSubstr = mb_strlen($userSearch);
        $replaceSubstr = mb_substr($string, $startIndex, $lengthSubstr);
        $replaceStr = '<span style="background-color:yellow">' . $replaceSubstr . '</span>';
        return str_ireplace($userSearch, $replaceStr, $string);
    }
    return $string;
}
