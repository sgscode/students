<?php

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}


function highlighting($string, $userSearch){
    $replaceStr = '<span style="background-color:yellow">'. $userSearch .'</span>';
    return str_replace($userSearch, $replaceStr, $string);
}