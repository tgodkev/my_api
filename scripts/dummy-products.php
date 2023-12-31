<?php
global $mysqli;
include_once './dbConnect.php';

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

for ($i = 0; $i < 100; $i++) {
    $name = "Product " . $i;
    $price = rand(10, 1000);
    $rating = rand(0, 5);
    $description = "Description for Product " . $i;
    $sql = "INSERT INTO products (name, price, description) VALUES ('$name', $price, '$description', '$rating')";

    if (!$mysqli->query($sql)) {
        echo "Error: " . $mysqli->error;
    }
}

echo "100 dummy products inserted.";
$mysqli->close();

// Simple script to add products to mysql db
