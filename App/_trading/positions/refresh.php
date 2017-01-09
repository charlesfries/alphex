<?php
require("../../global.php");
?>
<h5 class="fancy">Positions</h5>
<table class="table table-sm microprint mb-0">
  <thead>
    <tr>
      <th>Coin</th>
      <th>Position</th>
      <th>Amount</th>
      <th>P/L (BTC)</th>
      <th>Liq. Price</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $count = 1;
    while ($count > 0) {
      echo '<tr>';
      echo '<td colspan="5"><i>No open orders</i></td>';
      echo '</tr>';
      $count--;
    }
    ?>
  </tbody>
</table>