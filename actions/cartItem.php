<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$cart = $_SESSION['cart'] ?? [];



$selectedId = $_POST["selected_id"];
if (!is_null($selectedId)) {
    header('Content-Type: text/raw; charset=utf-8');
    $index = array_search($selectedId, $cart);
    if ($index === false) {
        array_push($cart, $selectedId);
        echo 'true';
    } else {
        array_splice($cart, $index, 1);
        echo 'false';
    }
    $_SESSION['cart'] = $cart;
}

?>