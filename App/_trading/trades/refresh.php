<?php
require("../../global.php");
require("../../controllers/orderbook.php");

$coin_1 = "BTC";
$coin_2 = "ETH";
?>
<h5 class="fancy">Trades</h5>
<div class="table-responsive">
  <table class="table table-sm microprint">
    <thead>
      <tr>
        <th>Time</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php
      
      /* TRADE GENERATOR
      $rand = rand(0, 1);
      
      $coin_1 = $rand == 0 ? "BTC" : "ETH";
      $coin_2 = $rand == 1 ? "BTC" : "ETH";
      $price = rand(1950000, 1960000) * 0.00000001;
      $amount = rand(100000, 999999999) * 0.00000001;
      
      $sql = $db->prepare("INSERT INTO trades (coin_1, coin_2, price, amount) VALUES (?, ?, ?, ?)");
      $sql->execute([$coin_1, $coin_2, $price, $amount]);
      */
      
      $coin_1_global = "BTC";
      $coin_2_global = "ETH";
      
      $sql = $db->prepare("SELECT * FROM trades ORDER BY id DESC LIMIT 20");
      $sql->execute();
      
      while ($res = $sql->fetch())
      {
        $color = $res["coin_1"] == $coin_1_global ? 'success' : 'danger';
        
        $time = date("H:i:s", strtotime($res["time"])); 
        
        $price = $res["price"];
        $amount = $res["amount"];
        $total = $price * $amount;
        
        $price = number_format($price, 8, '.', '');
        $amount = number_format($amount, 8, '.', '');
        $total = number_format($total, 8, '.', '');
        
        echo '<tr>';
        echo '<td nowrap class="text-'.$color.'">'.htmlspecialchars($time).'</td>';
        echo '<td nowrap class="align-right">'.htmlspecialchars($price).'</td>';
        echo '<td nowrap class="align-right">'.htmlspecialchars($amount).'</td>';
        echo '<td nowrap class="align-right">'.htmlspecialchars($total).'</td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</div>