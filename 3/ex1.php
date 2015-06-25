<?php

$email = 'sergey@lunyov.ru';

function get_domain($mail)
{
    $atPositon = strpos($mail, '@');
    $domain = substr($mail, $atPositon + 1);

    return $domain;
}

$result = get_domain($email);

var_dump($result);

$array = [
    'one' => ' adSfa   ',
    '    aDfAf    '
];

function trim_array($array)
{
    $string = '';

    foreach ($array as $i => $v) {
        $str = trim($v);
        $str = strtolower($str);
        $string .= $i . ': ' . $str . ' ';
    }

    return $string;
}

$result = trim_array($array);
var_dump($result);