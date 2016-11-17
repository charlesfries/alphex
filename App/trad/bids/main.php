<div id="bids_table"></div>
<small class="hover-right">
  <input id="bids_throttle" type="checkbox"> Throttle updates
  <select id="bids_throttle_int">
    <option value="1">1s</option>
    <option value="2">2s</option>
    <option value="3">3s</option>
    <option value="4">4s</option>
    <option value="5">5s</option>
  </select>
</small>
<script>
refresh_bids();

function refresh_bids()
{
  var bids_cb = document.getElementById("bids_throttle");
  
  var bids_delay = (bids_cb.checked) ? document.getElementById("bids_throttle_int").value * 1000 : 100;
  
  $("#bids_table").load("/trad/bids/refresh.php?a=<?=htmlspecialchars($_GET["a"])?>&b=<?=htmlspecialchars($_GET["b"])?>", function()
  {
    setTimeout(refresh_bids, bids_delay);
  });
}
</script>