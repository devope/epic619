<?php

require_once 'db.php';

$id = (int) $_GET['id'];

if (!is_int($id)) {
    echo "<h1>Для получения категории необходимо число!</h1>";
    die;
}

$categoryPreparedStatement = $pdo->prepare(
    'SELECT * FROM categories WHERE id = :id'
);
$categoryPreparedStatement->bindParam(
    ':id', $id
);
$categoryPreparedStatement->execute();
if ($categoryPreparedStatement->rowCount() === 0) {
    echo "<h1>Такой категории не существует!</h1>";
    die;
}

$productsStatment = $pdo->prepare(
    'SELECT * FROM products WHERE category_id = :id'
);
$productsStatment->bindParam(
    ':id', $id
);
$productsStatment->execute();
$products = $productsStatment->fetchAll(PDO::FETCH_ASSOC);

foreach ($products as $product) {
    echo "<a href='../product.php?id={$product['id']}'>"
    . $product['title'] .
    "</a><br>";
}
echo "<hr>";