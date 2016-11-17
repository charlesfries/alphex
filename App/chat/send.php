<?php
require("../global.php");
if (!empty($_POST["message"]))
{
  $sql = $db->prepare("INSERT INTO chats (user, message) VALUES (?, ?)");
  $sql->execute([$authenticated_user,$_POST["message"]]);
}
?>