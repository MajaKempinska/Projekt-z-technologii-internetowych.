<?php

session_start();

include "../helpers.php";

$cart = $_SESSION['cart'];

$query = "
    SELECT id, name, price, description, image_path
    FROM raccoons
    WHERE id IN (" .
    implode(",", array_map("intval", $cart))
    . ")";
$result = dbget($query);

$amount = 20; // za transport

foreach ($result as $row) {
    $amount += intval($row["price"]);
}


$host = 'localhost';
$username = 'root';
$password = '';    
$database = 'shop';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$address_line_1 = $_POST['address1'];
$address_line_2 = $_POST['address2'];
$card_number = $_POST['cardNumber'];
$card_expiration = $_POST['cardExpiration'];
$cvv = $_POST['CVV'];
$cleaning_supplies = $_POST['cleaningSupplies'];

if ($cleaning_supplies == 'yes') {
    $amount += 10;
}

$stmt = $conn->prepare("INSERT INTO receipt (uuid, amount, first_name, last_name, address_line_1, address_line_2, card_number, card_expiration, cvv, cleaning_supplies) VALUES (UUID(), ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $amount, $first_name, $last_name, $address_line_1, $address_line_2, $card_number, $card_expiration, $cvv, $cleaning_supplies);

if ($stmt->execute()) {
    $id = $conn->insert_id;
    $query = "SELECT uuid FROM receipt WHERE id = " . $id;
    $select_stmt = $conn->prepare($query);
    if (!$select_stmt) {
        die("Prepare failed: " . $conn->error);
    }
    if ($select_stmt->execute()) {
        $result = $select_stmt->get_result();
        $record = $result->fetch_assoc();
        $uuid = $record['uuid'];
        header("Location: /pracze/receipt.php?uuid=$uuid");
        session_destroy();
    } else {
        echo "Error retrieving uuid: " . $select_stmt->error;
    }
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>