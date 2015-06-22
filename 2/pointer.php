<?php

$array = [
    1, 2, 3
];

// foreach ($array as $key => $value) {
//     // $value * 2; 

//     $array[$key] = $value * 2;
// }

foreach ($array as  &$value) {
    $value = $value * 2;
}

var_dump($array);