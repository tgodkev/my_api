<?php
include_once '../../scripts/dbConnect.php';

$id = $_GET['id'];

header('Content-type: application/json');

$product = $mysqli->prepare("SELECT * FROM products WHERE id = ?");

$product->bind_param("i", $id);

$product->execute();

$result = $product->get_result();
$products = $result->fetch_assoc();

if($products){
    echo json_encode($products);
}else{
    echo json_encode(["error" => $mysqli->error]);
}



$product->close();


