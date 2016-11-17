<?php
require("../global.php");

$id = $_POST["id"];

$sql = $db->prepare("DELETE FROM orders WHERE user=? AND id=?");
$sql->execute([$authenticated_user, $id]);

echo "Success";
?>