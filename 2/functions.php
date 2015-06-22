<?php

function first($item)
{
    return $item;
}

function second($item, $item2)
{
    // global $name;

    // echo $name;
    echo $item, $item2;
}

$name = 'Sergey';
$secondName = 'Lunev';

second(first('Hello'), $secondName);

echo "<br>";
echo "<br>";
echo "<br>";

const NAME = "Sergey";
define('SURNAME', 'Lunev');

echo NAME;
echo "<br>";
echo "<br>";
echo "<br>";
echo SURNAME;

