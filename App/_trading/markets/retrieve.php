<div class="table-responsive">
  <table class="table table-sm table-hover microprint mb-0">
    <thead>
      <tr>
        <th nowrap></th>
        <th nowrap>Coin</th>
        <th nowrap>Price</th>
        <th nowrap>Volume</th>
        <th nowrap>Change</th>
        <th nowrap>Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require("../../global.php");

      $sql = $db->prepare("SELECT * FROM coins ORDER BY volume DESC");
      $sql->execute();
      while ($res = $sql->fetch())
      {
        $coin = strtoupper($_GET["a"]);

        // Volume
        $sql1 = $db->prepare("SELECT price, amount FROM trades WHERE coin_1=? OR coin_2=?");
        $sql1->execute([$res["symbol"], $res["symbol"]]);
        $volume = 0;
        while ($res1 = $sql1->fetch()) {
          $volume += $res1["price"] * $res1["amount"];
        }

        if ($res["symbol"] == "BTC") continue;

        $price = number_format($res["price"], 8, '.', '');
        $volume = number_format($volume, 3, '.', '');

        $sign = $res["change"] >= 0 ? '+' : '';
        $change = $sign.number_format($res["change"], 2, '.', '');
        $color = $res["change"] >= 0 ? 'success' : 'danger';

        $active = $res["symbol"] == strtoupper($coin) ? ' class="table-active"' : '';

        echo '<tr'.$active.'>';
        echo '<td nowrap><input type="checkbox"></td>';
        echo '<td nowrap><a href="?a='.htmlspecialchars(strtolower(strtolower($res["symbol"]))).'">'.htmlspecialchars($res["symbol"]).'</a></td>';
        echo '<td nowrap class="align-right">'.htmlspecialchars($price).'</td>';
        echo '<td nowrap class="align-right">'.htmlspecialchars($volume).'</td>';
        echo '<td nowrap class="align-right text-'.htmlspecialchars($color).'">'.htmlspecialchars($change).'</td>';
        echo '<td nowrap>'.htmlspecialchars($res["name"]).'</td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</div>
