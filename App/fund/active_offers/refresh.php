<?php
require("../../global.php");
?>
<h5 class="fancy">Active Offers</h5>
<table class="table table-sm microprint mb-0">
  <thead>
    <tr>
      <th nowrap>Coin</th>
      <th nowrap>Rate</th>
      <th nowrap>Amount</th>
      <th nowrap>Duration</th>
      <th nowrap>Auto-renew</th>
      <th nowrap>Type</th>
      <th nowrap>Time</th>
      <th nowrap>Fees</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = $db->prepare("SELECT * FROM loans WHERE user=?");
    $sql->execute([$authenticated_user]);
    while ($res = $sql->fetch())
    {
      $coin       = $res["coin"];
      $rate       = $res["rate"];
      $amount     = $res["amount"];
      $auto_renew = $res["auto_renew"];
      $type       = $res["type"];
      $time       = $res["time"];
      $id         = $res["id"];
      
      $amount     = number_format($amount, 8, '.', '');
      $auto_renew = $auto_renew == "one" ? "Bid" : "Ask";
      $time       = time_elapsed($time);
      
      echo '<tr>';
      echo '<td nowrap>'.htmlspecialchars($coin).'</td>';
      echo '<td nowrap>'.htmlspecialchars($rate).'</td>';
      echo '<td nowrap>'.htmlspecialchars($amount).'</td>';
      echo '<td nowrap>'.htmlspecialchars($auto_renew).'</td>';
      echo '<td nowrap>'.htmlspecialchars($type).'</td>';
      echo '<td nowrap>'.htmlspecialchars($time).'</td>';
      
      
      
      
      
      echo '<td nowrap>'.htmlspecialchars($coin_2).'/'.htmlspecialchars($coin_1).'</td>';
      echo '<td nowrap class="align-right">'.htmlspecialchars($amount1).'</td>';
      echo '</tr>';
    }
    if ($sql->rowCount() == 0) echo '<tr><td colspan="5"><i>No active offers</i></td></tr>';
    ?>
  </tbody>
</table>