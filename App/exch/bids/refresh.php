<?php
require("../../global.php");
require("../../controllers/orderbook.php");

$coin_1 = strtoupper($_GET["a"]);
$coin_2 = strtoupper($_GET["b"]);

$bids_total = get_bids_total();
$bids_total = number_format($bids_total, 8, ".", "");
?>
<small class="text-muted hover-right">Total: <?=htmlspecialchars($bids_total)?> <?=htmlspecialchars($coin_1)?></small>
<h5 class="fancy">Bids</h5>
<div class="table-responsive">
  <table class="table table-sm microprint">
    <thead>
      <tr>
        <th>Price</th>
        <th>Amount</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = $db->prepare("SELECT price, amount FROM orders WHERE side=? AND (coin_1=? OR coin_2=?) ORDER BY id DESC LIMIT 20");
      $sql->execute(["bid", $coin_2, $coin_2]);
      while ($res = $sql->fetch())
      {
        $price = $res["price"];
        $amount = $res["amount"];
        $total = $price * $amount;
        
        $price = number_format($price, 8, '.', '');
        $amount = number_format($amount, 8, '.', '');
        $total = number_format($total, 8, '.', '');
        
        echo '<tr>';
        echo '<td nowrap class="align-right">'.htmlspecialchars($price).'</td>';
        echo '<td nowrap class="align-right">'.htmlspecialchars($amount).'</td>';
        echo '<td nowrap class="align-right">'.htmlspecialchars($total).'</td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</div>