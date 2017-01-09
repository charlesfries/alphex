<h5 class="fancy">Markets</h5>
<div id="markets_table"></div>

<script>
refresh_markets();

function refresh_markets()
{
  $("#markets_table").load("/_trading/markets/retrieve.php?a=<?=htmlspecialchars($_GET["a"])?>&b=<?=htmlspecialchars($_GET["b"])?>", function() {
    setTimeout(refresh_markets, 1000);
  });
}
</script>
