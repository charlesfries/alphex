<div id="asks_table"></div>
<small class="hover-right">
  <input id="asks_throttle" type="checkbox"> Throttle updates
  <select id="asks_throttle_int">
    <option value="1">1s</option>
    <option value="2">2s</option>
    <option value="3">3s</option>
    <option value="4">4s</option>
    <option value="5">5s</option>
  </select>
</small>
<script>
refresh_asks();

function refresh_asks()
{
  var asks_cb = document.getElementById("asks_throttle");
  
  var asks_delay = (asks_cb.checked) ? document.getElementById("asks_throttle_int").value * 1000 : 100;
  
  $("#asks_table").load("/trad/asks/refresh.php?a=<?=htmlspecialchars($_GET["a"])?>&b=<?=htmlspecialchars($_GET["b"])?>", function()
  {
    setTimeout(refresh_asks, asks_delay);
  });
}
</script>