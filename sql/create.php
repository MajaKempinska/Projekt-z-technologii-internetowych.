<?php
$host = 'localhost';
$username = 'root';
$password = '';

$mysqli = new mysqli($host, $username, $password);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = file_get_contents('create.sql');

if ($mysqli->multi_query($sql)) {
    do {
        if ($result = $mysqli->store_result()) {
            $result->free();
        }
    } while ($mysqli->more_results() && $mysqli->next_result());
    echo "Database and table created successfully.";
} else {
    echo "Error executing SQL script: " . $mysqli->error;
}

echo "<br>Redirect in 3 seconds...";

$mysqli->close();
header("refresh:3;url=/pracze/index.php");

?>