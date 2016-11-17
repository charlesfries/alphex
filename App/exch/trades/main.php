<div id="trades_table"></div>
<small class="hover-right">
  <input id="trades_throttle" type="checkbox"> Throttle updates
  <select id="trades_throttle_int">
    <option value="1">1s</option>
    <option value="2">2s</option>
    <option value="3">3s</option>
    <option value="4">4s</option>
    <option value="5">5s</option>
  </select>
</small>
<script>
retrieve_trades();

function retrieve_trades()
{
  var trades_cb = document.getElementById("trades_throttle")
  
  var trades_delay = (trades_cb.checked) ? document.getElementById("trades_throttle_int").value * 1000 : 100;
  
  $("#trades_table").load("/exch/trades/refresh.php?a=<?=htmlspecialchars($_GET["a"])?>&b=<?=htmlspecialchars($_GET["b"])?>", function()
  {
    setTimeout(retrieve_trades, trades_delay);
  });
}
</script>