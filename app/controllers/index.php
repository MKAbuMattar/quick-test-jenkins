<?php

// Include the connection.php file
require_once 'app/config/connection.php';

// Get the data from the database
$query = "SELECT * FROM `users`";
$stmt = $conn->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// close the connection
$conn = null;
