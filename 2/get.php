<?php

$title = '';
if (isset($_GET['title'])) {
    $title = $_GET['title'];
}

$description = '';
if (isset($_GET['description'])) {
    $description = $_GET['description'];
}

$category = '';
if (isset($_GET['category'])) {
    $category = $_GET['category'];
}

$price = '';
if (isset($_GET['price'])) {
    $price = $_GET['price'];
}

echo $title;
echo "<br>";
echo $description;

echo 'blablaba';