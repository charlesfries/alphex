<?php
require("../../global.php");
require("../../controllers/orderbook.php");

$type   = "market";
$side   = "bid";
$coin_1 = strtoupper($_GET["a"]);
$coin_2 = strtoupper($_GET["b"]);
$price  = $_POST["price"];
$amount = $_POST["amount"];

echo submit_order($type, $side, $coin_1, $coin_2, $price, $amount);
?>