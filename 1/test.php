<?php

// // $name = "Sergey";

// // // Это скажет нам привет!
// // echo "Hello, " . $name . "!";

// $array = array(1, 2, 3);
// // $integer = 100;

// // echo $array . "<br>";

// // if (isset($array)) {
//     var_dump($array);
// // }

// $first = true;
// $second = false;

// if ($first == true && $second == true) {
//     echo "yay!";
// }

// $age = 28;

// if ($age < 20) {
//     echo "Все впереди Jack!";
// } elseif ($age >= 20 || $age < 30 ) {
//     echo "Время взяться за ум Jack!";
// } else {
//     echo "У вас есть чему поучиться Jack!";
// }

// var_dump($_GET);
// echo "<br>";
// var_dump($_POST['hello']);

// Это HTML код!
// <form action="test.php" method="post">
//     <input type="text" name="hello">
//     <input type="submit">
// </form>

// $sum = 0;
// for ($i=1; $i <= 3; $i++) { 
//     echo '#' . $i . ' ';
//     echo "Sum before: " . $sum . ". ";
//     $sum += $i;
//     echo "Sum after: " . $sum;
//     echo "<br>";
// }
// echo 'Sum: ' . $sum;

// $array = array(1, 2, 3, 4);

// foreach ($array as $item) {
//     var_dump($item);
// }

// exit('DIE!');

// var_dump($number++);
// var_dump($number);

for ($i=1; $i <= 100 ; $i++) { 
    echo $i . " ";
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz <br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz <br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz <br>";
    } 
}