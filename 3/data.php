<?php

$message = '';

var_dump($_GET);

foreach ($_GET as $key => $value) {
    // $message = $message . $key . ': ' . $value . '<br>';
    $message .= $key . ': ' . $value . '<br>';
}

echo $message;