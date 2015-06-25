<?php 

// // $a = 'car';
// // $a[0] = 'b';
// // echo $a;

// // $b = 'Кар';

// // $b = $b . $a;
// // $b[0] = 'Б';
// // $b[1] = 'Б';
// // echo "<br>";
// // echo $b;

// $string = 'Hello World world';
// $pos = strpos($string, 'world');
// var_dump($pos);

// $substr = substr($string, $pos, 3);

// var_dump($substr);

// $notTrimedString = '            asdfasfdads     aaa';
// echo '<pre>'.$notTrimedString . '</pre><br>';
// echo '<pre>'.trim($notTrimedString) . '</pre><br>';

// $nlString = "string
// 2 string";

// echo $nlString . '<br>';
// echo "<br>";
// echo nl2br($nlString);

// $eString = 'one two three';
// $eString = explode(' ', $eString);
// var_dump(implode('_', $eString));

$name = 'Сергей';

var_dump(strlen($name));
var_dump(mb_strlen($name));