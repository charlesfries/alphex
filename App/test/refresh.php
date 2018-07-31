<?php
/*require("../global.php");
$sql = $db->prepare("SELECT user, message FROM chats ORDER BY id DESC LIMIT 15");
$sql->execute();
while ($res = $sql->fetch())
{
  $sql1 = $db->prepare("SELECT admin FROM users WHERE username=?");
  $sql1->execute([$res["user"]]);
  $res1 = $sql1->fetch();
  $flair = $res1["admin"] == 1 ? ' class="text-warning"' : '';

  echo '<tr>';
  echo '<td><b'.$flair.'>'.htmlspecialchars($res["user"]).': </b>'.htmlspecialchars($res["message"]).'</td>';
  echo '</tr>';
}*/

echo 'Data';
?>
