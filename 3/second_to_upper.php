<?php

$string = "привет прекрасный мир";

function secondLetterToUpper($str)
{
    $array = explode(' ', $str);
    $finalArray = [];

    foreach ($array as $value) {
        $stringLength = mb_strlen($value);
        $finalString = '';

        for ($i=0; $i < $stringLength; $i++) { 
            $char = mb_substr(
                $value, 
                $i,
                1
            );
            if ((($i + 1) % 2) === 0) {
                $char = mb_strtoupper($char);
            }

            $finalString .= $char;
        }
        
        $finalArray[] = $finalString;
    }

    return implode(' ', $finalArray);
}

echo secondLetterToUpper($string);