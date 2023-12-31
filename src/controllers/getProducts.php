<?php
include_once '../../scripts/dbConnect.php';
global $mysqli;

header('Content-Type: application/json');

$sql = "SELECT * FROM products";
$result = $mysqli->query($sql);

if ($result) {
    $products = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($products);
} else {
    echo json_encode(["error" => $mysqli->error]);
}

$mysqli->close();
?>
