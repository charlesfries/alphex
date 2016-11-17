<div class="table-responsive">
  <table class="table table-sm table-hover microprint mb-0">
    <thead>
      <tr>
        <th>Coin</th>
        <th>My Balance</th>
        <th>Name</th>
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
        
        $active = $res["symbol"] == $coin ? ' class="table-active"' : '';
        
        $balance = $vault->get_balance($res["symbol"]);
        $balance = number_format($balance, 8, ".", "");
        
        echo '<tr'.$active.'>';
        echo '<td><a href="?a='.htmlspecialchars(strtolower($res["symbol"])).'">'.htmlspecialchars($res["symbol"]).'</a></td>';
        echo '<td>'.htmlspecialchars($balance).'</td>';
        echo '<td>'.htmlspecialchars($res["name"]).'</td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</div>