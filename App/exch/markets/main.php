<ul class="nav nav-tabs">
  <?php
  $sql = $db->prepare("SELECT coin, default_coin FROM markets");
  $sql->execute();
  while ($res = $sql->fetch())
  {
    $coin = $res["coin"];
    $default_coin = $res["default_coin"];
    $active = $coin_1 == $coin ? ' active' : '';
    echo '<li class="nav-item"><a class="nav-link'.$active.'" href="?a='.htmlspecialchars(strtolower($coin)).'&b='.htmlspecialchars(strtolower($default_coin)).'">'.htmlspecialchars($coin).'</a></li>';
  }
  ?>
</ul>
<br>
<h5 class="fancy">Markets</h5>
<div id="markets_table"></div>

<script>
refresh_markets();

function refresh_markets() {
  $("#markets_table").load("/exch/markets/retrieve.php?a=<?=htmlspecialchars($_GET["a"])?>&b=<?=htmlspecialchars($_GET["b"])?>", function() {
    setTimeout(refresh_markets, 1000);
  });
}
</script>