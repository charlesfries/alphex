<small class="text-muted hover-right"><?=htmlspecialchars($coin_1_balance_str)?> <?=htmlspecialchars($coin_1)?></small>
<h5 class="fancy">Limit Buy</h5>
<hr class="mt-0">
<div id="limit_buy_alert"></div>
<form id="limit_buy">
  <fieldset class="form-group">
    <div class="input-group input-group-sm">
      <input id="limit_buy_price" placeholder="Price" type="text" class="form-control form-control-sm">
      <div class="input-group-addon"><?=htmlspecialchars($coin_1)?></div>
    </div>
  </fieldset>
  <fieldset class="form-group">
    <div class="input-group input-group-sm">
      <input id="limit_buy_amount" placeholder="Amount" type="text" class="form-control form-control-sm">
      <div class="input-group-addon"><?=htmlspecialchars($coin_2)?></div>
    </div>
  </fieldset>
  <hr>
  <fieldset class="form-group">
    <div class="input-group input-group-sm">
      <input id="limit_buy_total" placeholder="Total" type="text" class="form-control form-control-sm" disabled>
      <div class="input-group-addon"><?=htmlspecialchars($coin_1)?></div>
    </div>
  </fieldset>
  <input value="Buy <?=htmlspecialchars($coin_2)?>" type="submit" class="btn btn-success btn-block btn-sm mb-0"></button>
</form>

<script>
function limit_buy_total()
{
  var price = document.getElementById("limit_buy_price").value;
  var amount = document.getElementById("limit_buy_amount").value;
  document.getElementById("limit_buy_total").value = price * amount;
}

$("#limit_buy_price").on("input", function()
{ 
    limit_buy_total()
});

$("#limit_buy_amount").on("input", function()
{ 
    limit_buy_total()
});

$("#limit_buy_alert").fadeOut();

$("#limit_buy").submit(function(e)
{
  $("#limit_buy_alert").fadeIn()
  
  var data = "price=" + $("#limit_buy_price").val() + "&amount=" + $("#limit_buy_amount").val();
  
  $.ajax({
    type: "POST",
    url: "/exch/limit_buy/order.php?a=<?=htmlspecialchars($coin_1)?>&b=<?=htmlspecialchars($coin_2)?>",
    data: data,
    success: function(data)
    {
      var response = JSON.parse(data);
      var resp_cond = response.condition;
      var resp_mess = response.message;

      if (resp_cond)
      {
        document.getElementById("limit_buy_price").value = "";
        document.getElementById("limit_buy_amount").value = "";
        document.getElementById("limit_buy_total").value = "";
      }
      
      document.getElementById("limit_buy_alert").innerHTML = resp_mess;
    }
  });

  e.preventDefault();
  
  setTimeout(function()
  {
    $("#limit_buy_alert").fadeOut();
  }, 5000 );
});
</script>