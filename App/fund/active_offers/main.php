<div id="active_offers_table"></div>
<script>
refresh_active_offers();

function refresh_active_offers() {
  $("#active_offers_table").load("/fund/active_offers/refresh.php", function() {
    setTimeout(refresh_active_offers, 250);
  });
}
</script>