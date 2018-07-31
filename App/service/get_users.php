<?php
require("authenticate.php");
if (!authenticate($_GET["s"])) exit;

$response = [
  "success" => true,
  "data" => null,
  "message" => "Yo"
];
echo json_encode($response);
?>
