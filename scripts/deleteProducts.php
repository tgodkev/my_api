<?php
include_once 'dbConnect.php'; // Make sure this path is correct

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "DELETE FROM products";

if ($mysqli->query($sql) === TRUE) {
    echo "All products have been deleted.";
} else {
    echo "Error deleting products: " . $mysqli->error;
}

$mysqli->close();
?>
