<small class="text-muted hover-right"><?=htmlspecialchars($coin_balance_str)?> <?=htmlspecialchars($coin)?></small>
<h5 class="fancy">Offer Loan</h5>
<hr class="mt-0">
<div id="offer_loan_alert"></div>
<form id="offer_loan">
  <fieldset class="form-group">
    <div class="input-group input-group-sm">
      <input id="offer_loan_price" placeholder="Rate" type="text" class="form-control form-control-sm">
      <div class="input-group-addon">%</div>
    </div>
  </fieldset>
  <fieldset class="form-group">
    <div class="input-group input-group-sm">
      <input id="offer_loan_amount" placeholder="Amount" type="text" class="form-control form-control-sm">
      <div class="input-group-addon"><?=htmlspecialchars($coin)?></div>
    </div>
  </fieldset>
  <fieldset class="form-group">
    <div class="input-group input-group-sm">
      <input id="offer_loan_duration" placeholder="Duration" type="text" class="form-control form-control-sm">
      <div class="input-group-addon">Days</div>
    </div>
  </fieldset>
  <input value="Offer <?=htmlspecialchars($coin)?>" type="submit" class="btn btn-warning btn-block btn-sm mb-0"></button>
</form>

<script>
$("#offer_loan_alert").fadeOut();

$("#offer_loan").submit(function(e)
{
  $("#offer_loan_alert").fadeIn()

  var data = "rate=" + $("#offer_loan_rate").val() + "&amount=" + $("#offer_loan_amount").val() + "&duration=" + $("#offer_loan_duration").val();

  $.ajax({
    type: "POST",
    url: "/_lending/offer/order.php?a=<?=htmlspecialchars($coin)?>",
    data: data,
    success: function(data) {

      var response = JSON.parse(data);
      var resp_cond = response.condition;
      var resp_mess = response.message;

      if (resp_cond)
      {
        document.getElementById("limit_buy_price").value = "";
        document.getElementById("limit_buy_amount").value = "";
        document.getElementById("limit_buy_duration").value = "";
      }

      document.getElementById("offer_loan_alert").innerHTML = resp_mess;
    }
  });

  e.preventDefault();

  setTimeout(function()
  {
   $("#offer_loan_alert").fadeOut();
  }, 5000 );
});
</script>
