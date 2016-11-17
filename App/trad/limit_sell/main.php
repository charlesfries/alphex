<small class="text-muted hover-right"><?=htmlspecialchars($coin_2_balance_str)?> <?=htmlspecialchars($coin_2)?></small>
<h5 class="fancy">Limit Sell</h5>
<hr class="mt-0">
<p id="limit_sell_alert" class="text-danger minilert"></p>
<form id="limit_sell">
  <fieldset class="form-group">
    <div class="input-group input-group-sm">
      <input id="limit_sell_price" placeholder="Price" type="text" class="form-control form-control-sm">
      <div class="input-group-addon"><?=htmlspecialchars($coin_1)?></div>
    </div>
  </fieldset>
  <fieldset class="form-group">
    <div class="input-group input-group-sm">
      <input id="limit_sell_amount" placeholder="Amount" type="text" class="form-control form-control-sm">
      <div class="input-group-addon"><?=htmlspecialchars($coin_2)?></div>
    </div>
  </fieldset>
  <hr>
  <fieldset class="form-group">
    <div class="input-group input-group-sm">
      <input id="limit_sell_total" placeholder="Total" type="text" class="form-control form-control-sm" disabled>
      <div class="input-group-addon"><?=htmlspecialchars($coin_1)?></div>
    </div>
  </fieldset>
  <input value="Sell <?=htmlspecialchars($coin_2)?>" type="submit" class="btn btn-danger btn-block btn-sm mb-0"></button>
</form>

<script>
function limit_sell_total()
{
  var price = document.getElementById("limit_sell_price").value;
  var amount = document.getElementById("limit_sell_amount").value;
  document.getElementById("limit_sell_total").value = price * amount;
}

$("#limit_sell_price").on("input", function()
{
  limit_sell_total()
});

$("#limit_sell_amount").on("input", function()
{
  limit_sell_total()
});

$("#limit_sell_alert").fadeOut();

$("#limit_sell").submit(function(e)
{
  $("#limit_sell_alert").fadeIn()
  
  var data = "price=" + $("#limit_sell_price").val() + "&amount=" + $("#limit_sell_amount").val();
  
  $.ajax({
    type: "POST",
    url: "/trad/limit_sell/order.php?a=<?=htmlspecialchars($coin_1)?>&b=<?=htmlspecialchars($coin_2)?>",
    data: data,
    success: function(data)
    {
      var response = JSON.parse(data);
      var resp_cond = response.condition;
      var resp_mess = response.message;

      if (resp_cond)
      {
        document.getElementById("limit_sell_price").value = "";
        document.getElementById("limit_sell_amount").value = "";
        document.getElementById("limit_sell_total").value = "";
      }
      
      document.getElementById("limit_sell_alert").innerHTML = resp_mess;
    }
  });

  e.preventDefault();
  
  setTimeout(function()
  {
   $("#limit_sell_alert").fadeOut();
  }, 5000 );
});
</script>