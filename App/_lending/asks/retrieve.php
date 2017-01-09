<table class="table table-sm microprint">
  <thead>
    <tr>
      <th>Rate</th>
      <th>Amount</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $count = 20;
    while ($count > 0) {
      $rate = "0.0307%";
      $amount = number_format(rand(10000000, 99999999) * 0.00000001, 8, '.', '');
      $total = number_format(rand(10000000, 99999999) * 0.00000001, 8, '.', '');
      echo '<tr>';
      echo '<td class="align-right">'.htmlspecialchars($rate).'</td>';
      echo '<td class="align-right">'.htmlspecialchars($amount).'</td>';
      echo '<td class="align-right">'.htmlspecialchars($total).'</td>';
      echo '</tr>';
      $count--;
    }
    ?>
  </tbody>
</table>