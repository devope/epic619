<?php

// // $file = 'secret.txt';

// // $content = file_get_contents($file);
// // $content .= "Santa dosen't exists \n";
// // file_put_contents($file, $content);

// // Это очень странная переменная
// // Она равна files/secret.txt
$filename = __DIR__ . 
    DIRECTORY_SEPARATOR 
    . 'files'
    . DIRECTORY_SEPARATOR
    . 'sample.csv';
    // .'secret.txt';

// if (file_exists($filename)) {
//     $mode = 'r+';
// } else {
//     $mode = 'a';
// }

// $fp = fopen($filename, $mode);

// $test = fwrite($fp, "Santa dosen't exists \n");
// if ($test) {
//     echo "All ok<br>";
// } else {
//     echo "Something goes wrong";
// }
// fclose($fp);

// $fp = fopen($filename, 'r');
// if ($fp) {
//     while (($buffer = fgets($fp, 256)) !== false) {
//         echo nl2br($buffer);
//     }
//     if (!feof($fp)) {
//         echo "Something goes wrong 1";
//     }
// } else {
//     echo "Something goes wrong";
// }

// $lines = file($filename);
// var_dump($lines);

// $yandex = implode('', file('http://yandex.ru'));
// echo $yandex;


// Работа с CSV
$fp = fopen($filename, 'r');
if ($fp) {
    while (($csv = fgetcsv($fp, 1000, ';'))) {
        var_dump($csv);
    }

    fclose($fp);
}
