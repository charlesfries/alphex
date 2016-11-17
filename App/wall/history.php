<table class="table table-sm table-hover mb-0">
  <thead>
    <tr>
      <th nowrap>Time</th>
      <th nowrap>Type</th>
      <th nowrap>Amount</th>
      <th nowrap>Status</th>
      <th nowrap>Coin</th>
      <th nowrap>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = $db->prepare("SELECT * FROM coins ORDER BY symbol");
    $sql->execute();
    while ($res = $sql->fetch())
    {
      $time = time_elapsed("2016-08-28 02:12:26");
      $type = "Withdrawal";
      $amount = "0.00000000";
      $status = "Complete";
      $symbol = $res["symbol"];
      $txid = "39ff242d4c712574f44538f3c1269f3dcd7b95ea1c78c9f08bdba4a6d826f1bb";
      
      echo '<tr>';
      echo '<td nowrap>'.htmlspecialchars($time).'</td>';
      echo '<td nowrap>'.htmlspecialchars($type).'</td>';
      echo '<td nowrap>'.htmlspecialchars($amount).'</td>';
      echo '<td nowrap>'.htmlspecialchars($status).'</td>';
      echo '<td nowrap>'.htmlspecialchars($symbol).'</td>';
      echo '<td nowrap><a href="https://blockchain.info/tx/'.htmlspecialchars($txid).'" target="_blank">View</a></td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
<br>
<nav>
  <ul class="pagination mt-0 mb-0">
    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><span>&larr;</span></a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#"><span>&rarr;</span></a></li>
  </ul>
</nav>