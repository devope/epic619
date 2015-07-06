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

    $statment = $pdo->prepare(
        'SELECT * FROM products WHERE id = :id'
    );
    $statment->execute([
        'id' => $_GET['id']
    ]);

    var_dump($statment->fetchAll(PDO::FETCH_ASSOC));
    
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
