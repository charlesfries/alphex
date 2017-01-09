<h5 class="fancy">Markets</h5>
<div id="markets_table"></div>
<script>
retrieve_markets();

function retrieve_markets() {
  $("#markets_table").load("/_lending/markets/refresh.php?a=<?=htmlspecialchars($_GET["a"])?>", function() {
    setTimeout(retrieve_markets, 250);
  });
}
</script>
