<small class="text-muted hover-right"><?=htmlspecialchars($coin_2_balance_str)?> <?=htmlspecialchars($coin_2)?></small>
<h5 class="fancy">Market Sell</h5>
<hr class="mt-0">
<p id="market_sell_alert" class="text-danger minilert"></p>
<form id="market_sell">
  <fieldset class="form-group">
    <div class="input-group input-group-sm">
      <input id="market_sell_price" placeholder="Price" type="text" class="form-control form-control-sm">
      <div class="input-group-addon"><?=htmlspecialchars($coin_1)?></div>
    </div>
  </fieldset>
  <fieldset class="form-group">
    <div class="input-group input-group-sm">
      <input id="market_sell_amount" placeholder="Amount" type="text" class="form-control form-control-sm">
      <div class="input-group-addon"><?=htmlspecialchars($coin_2)?></div>
    </div>
  </fieldset>
  <hr>
  <fieldset class="form-group">
    <div class="input-group input-group-sm">
      <input id="market_sell_total" placeholder="Total" type="text" class="form-control form-control-sm" disabled>
      <div class="input-group-addon"><?=htmlspecialchars($coin_1)?></div>
    </div>
  </fieldset>
  <input value="Sell <?=htmlspecialchars($coin_2)?>" type="submit" class="btn btn-danger btn-block btn-sm mb-0"></button>
</form>

<script>
function market_sell_total()
{
  var price = document.getElementById("market_sell_price").value;
  var amount = document.getElementById("market_sell_amount").value;
  document.getElementById("market_sell_total").value = price * amount;
}

$("#market_sell_price").on("input", function()
{
  market_sell_total()
});

$("#market_sell_amount").on("input", function()
{
  market_sell_total()
});

$("#market_sell_alert").fadeOut();

$("#market_sell").submit(function(e)
{
  $("#market_sell_alert").fadeIn()

  var data = "price=" + $("#market_sell_price").val() + "&amount=" + $("#market_sell_amount").val();

  $.ajax({
    type: "POST",
    url: "/_trading/market_sell/order.php?a=<?=htmlspecialchars($coin_1)?>&b=<?=htmlspecialchars($coin_2)?>",
    data: data,
    success: function(data)
    {
      var response = JSON.parse(data);
      var resp_cond = response.condition;
      var resp_mess = response.message;

      if (resp_cond)
      {
        document.getElementById("market_sell_price").value = "";
        document.getElementById("market_sell_amount").value = "";
        document.getElementById("market_sell_total").value = "";
      }

      document.getElementById("market_sell_alert").innerHTML = resp_mess;
    }
  });

  e.preventDefault();

  setTimeout(function()
  {
   $("#market_sell_alert").fadeOut();
  }, 5000 );
});
</script>
