<?php
// Database connection details
$host = 'localhost';
$username = 'root'; // Replace with your database username
$password = '';     // Replace with your database password

// Create a new MySQLi connection
$mysqli = new mysqli($host, $username, $password);

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Read the SQL file
$sql = file_get_contents('create.sql');

// Execute the SQL queries
if ($mysqli->multi_query($sql)) {
    do {
        // Store the first result set
        if ($result = $mysqli->store_result()) {
            $result->free();
        }
    } while ($mysqli->more_results() && $mysqli->next_result());
    echo "Database and table created successfully.";
} else {
    echo "Error executing SQL script: " . $mysqli->error;
}

echo "<br>Redirect in 3 seconds...";

// Close the connection
$mysqli->close();
header( "refresh:3;url=/pracze/index.php" );


?>