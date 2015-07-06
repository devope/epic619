<?php

try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=duck_shop;charset=utf8',
        'root',
        ''
    );
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );


    $statment = $pdo->query("SELECT title FROM products");
    var_dump($statment->fetch(PDO::FETCH_ASSOC));
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
