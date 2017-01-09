<div id="balances_table"></div>
<script>
retrieve_balances();

function retrieve_balances()
{
  $("#balances_table").load("/_trading/balances/refresh.php", function()
  {
    setTimeout(retrieve_balances, 1000);
  });
}
</script>
