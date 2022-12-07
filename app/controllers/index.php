<?php

// Include the connection.php file
require_once '../config/connection.php';

// Get the data from the database
$sql = "SELECT * FROM `users`";
$statement = $db->prepare($sql);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);