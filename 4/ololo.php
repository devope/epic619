<?php

session_start();

var_dump($_SESSION);

var_dump($GLOBALS);

$hipsFile = __DIR__ . 
    DIRECTORY_SEPARATOR 
    . 'files'
    . DIRECTORY_SEPARATOR
    . 'hips.txt';

$resultFile = __DIR__ . 
    DIRECTORY_SEPARATOR 
    . 'files'
    . DIRECTORY_SEPARATOR
    . 'result.txt';

$stringArray = file($hipsFile);
$stringArray = array_reverse($stringArray);

$count = 0;
foreach ($stringArray as $key => $string) {
    if ($string === "\n") {
        continue;
    }
    $count++;
    if ($count % 2 === 0) {
        unset($stringArray[$key]);
    } else {
       $stringArray[$key] = str_replace(
            'YOLO', 'Ololo', $string
        ); 
    }
}

$fp = fopen($resultFile, 'w+');
fwrite($fp, implode('', $stringArray));
fclose($fp);

echo nl2br(file_get_contents($resultFile));