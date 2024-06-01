<?php

function dbget($query) {
    $host = 'localhost';
    $username = 'root';
    $password = '';    
    $database = 'shop';

    $mysqli = new mysqli($host, $username, $password, $database);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $result = $mysqli->query($query);

    if (!$result) {
        die("Query failed: " . $mysqli->error);
    }

    $fetched = $result->fetch_all(MYSQLI_ASSOC);
    $mysqli->close();
    $result->free();
    return $fetched;
}

?>