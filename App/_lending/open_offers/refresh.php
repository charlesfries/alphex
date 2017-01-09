<?php
require("../../global.php");
?>
<h5 class="fancy">Open Offers</h5>
<table class="table table-sm microprint mb-0">
  <thead>
    <tr>
      <th nowrap>Rate</th>
      <th nowrap>Amount</th>
      <th nowrap>Duration</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = $db->prepare("SELECT * FROM orders WHERE user=?");
    $sql->execute([$authenticated_user]);
    while ($res = $sql->fetch())
    {
      $side = $res["side"] == "bid" ? 'Bid' : 'Ask';
      $color = $res["side"] == "bid" ? 'success' : 'danger';
      
      $coin_1 = $res["coin_1"];
      $coin_2 = $res["coin_2"];
      
      $price = $res["price"];
      $amount = $res["amount"];
      $total = $res["price"] * $res["amount"];
      
      $price = number_format($price, 8, '.', '');
      $amount = number_format($amount, 8, '.', '');
      $total = number_format($total, 8, '.', '');
      
      $id = $res["id"];
      
      echo '<tr>';
      echo '<td nowrap class="text-'.htmlspecialchars($color).'">'.htmlspecialchars($side).'</td>';
      echo '<td nowrap>'.htmlspecialchars($coin_2).'/'.htmlspecialchars($coin_1).'</td>';
      echo '<td nowrap class="align-right">'.htmlspecialchars($amount).'</td>';
      echo '<td nowrap class="align-right">'.htmlspecialchars($total).'</td>';
      echo '<td nowrap><a href="javascript:close(\''.htmlspecialchars($id).'\')">Close</a></td>';
      echo '</tr>';
    }
    if ($sql->rowCount() == 0) echo '<tr><td colspan="5"><i>No open orders</i></td></tr>';
    ?>
  </tbody>
</table>