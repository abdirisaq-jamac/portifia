<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "porti";

// Create connection
try {
    $conn = new mysqli($servername, $username, $password);
    
    // Check if database exists, if not create it
    $conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
    
    // Select the database
    $conn->select_db($dbname);
    
    // Create messages table if it doesn't exist
    $sql = "CREATE TABLE IF NOT EXISTS messages (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        subject VARCHAR(200) NOT NULL,
        message TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $conn->query($sql);
    
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}
?>