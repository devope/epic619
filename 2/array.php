<?php

// $arrayAssoc = [
//     'key' => 'value',
//     'key2' => 'value2',
//     'key3' => [

//     ]
// ];

// var_dump($arrayAssoc);

// $arrayIndex = [
//     'value',
//     'value2',
//     [

//     ]
// ];

// var_dump($arrayIndex);

$products = [
    [
        'title' => 'Asus',
        'price' => 100500
    ],
    [
        'title' => 'Dell',
        'price' => 500100
    ]
];

var_dump($products[1]['title']);