<table class="table table-sm table-hover">
  <thead>
    <tr>
      <th nowrap>Coin</th>
      <th nowrap>Name</th>
      <th nowrap>Total Balance</th>
      <th nowrap>On Orders</th>
      <th nowrap>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = $db->prepare("SELECT * FROM coins ORDER BY symbol");
    $sql->execute();
    while ($res = $sql->fetch()) {
      
      $balance = $balance = $vault->get_balance($res["symbol"]);
      $on_orders = 0;
      
      $balance = number_format($balance, 8, ".", "");
      $on_orders = number_format($on_orders, 8, ".", "");
      
      echo '<tr>';
      echo '<td nowrap>'.htmlspecialchars($res["symbol"]).'</td>';
      echo '<td nowrap>'.htmlspecialchars($res["name"]).'</td>';
      echo '<td nowrap>'.htmlspecialchars($balance).'</td>';
      echo '<td nowrap>'.htmlspecialchars($on_orders).'</td>';
      echo '<td nowrap><a href="#deposit">Deposit</a> / <a href="#withdraw">Withdraw</a></td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
<small class="hover-right"><input type="checkbox"> Hide 0 balances</small>