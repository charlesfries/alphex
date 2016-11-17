<?php
require("../../global.php");
require("../../controllers/orderbook.php");

$coin = strtoupper($_GET["a"]);
$rate = $_POST["rate"];
$amount = $_POST["price"];
$duration = $_POST["amount"];

echo submit_offer ($coin, $rate, $amount, $duration);
?>