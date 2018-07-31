<?php
require("authenticate.php");
if (!authenticate($_GET["s"])) exit;

$response = [
  "version" => 1.0,
  "message" => "Alphex private API connection successful."
];
echo json_encode($response);
?>
