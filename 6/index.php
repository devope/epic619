<?php

require_once 'db.php';

$categoriesStatment = $pdo->prepare(
    'SELECT * FROM categories'
);
$categoriesStatment->execute();

$categories = $categoriesStatment->fetchAll(PDO::FETCH_ASSOC);

foreach ($categories as $category) {
    echo "<a href='../category.php?id={$category['id']}'>"
    . $category['title'] .
    "</a><br>";
}
echo "<hr>";

$productsStatment = $pdo->prepare(
    'SELECT * FROM products'
);
$productsStatment->execute();

$products = $productsStatment->fetchAll(PDO::FETCH_ASSOC);

foreach ($products as $product) {
    echo "<a href='../product.php?id={$product['id']}'>"
    . $product['title'] .
    "</a><br>";
}
echo "<hr>";