<?php

require_once 'header.php';

$page = 'main';
var_dump($page);
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

var_dump($page);

if ($page && $page === 'main') {
    require_once 'main.php';
} elseif ($page === 'contacts') {
    require_once 'contacts.php';
}


require_once 'footer.php';