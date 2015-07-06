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