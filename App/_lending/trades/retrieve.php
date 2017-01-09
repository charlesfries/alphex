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
      $count = 20;
      while ($count > 0) {
        $time = "12:33:51";
        $price = number_format(rand(10000000, 99999999) * 0.00000001, 8, '.', '');
        $amount = number_format(rand(10000000, 99999999) * 0.00000001, 8, '.', '');
        $total = number_format(rand(10000000, 99999999) * 0.00000001, 8, '.', '');
        echo '<tr>';
        echo '<td nowrap>'.htmlspecialchars($time).'</td>';
        echo '<td nowrap class="align-right">'.htmlspecialchars($price).'</td>';
        echo '<td nowrap class="align-right">'.htmlspecialchars($amount).'</td>';
        echo '<td nowrap class="align-right">'.htmlspecialchars($total).'</td>';
        echo '</tr>';
        $count--;
      }
      ?>
    </tbody>
  </table>
</div>