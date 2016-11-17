<?php
$coin_1_balance = $vault->get_balance($coin_1);
$coin_2_balance = $vault->get_balance($coin_2);

if ($coin_1_balance == 0 && $coin_2_balance == 0) {
?>
<div class="alert alert-warning minilert mb-0" role="alert">
  <strong>Notice!</strong> Your <?=htmlspecialchars($coin_1)?> and/or <?=htmlspecialchars($coin_2)?> wallet is empty. You won't be able to trade unless you make a deposit.  
</div>
<br>
<?php
}
?>