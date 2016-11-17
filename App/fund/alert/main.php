<?php
$balance = $vault->get_balance($coin);

if ($balance == 0) {
?>
<div class="alert alert-warning minilert mb-0" role="alert">
  <strong>Notice!</strong>  Your <?=htmlspecialchars($coin)?> wallet is empty. Transfer funds or make a new deposit to get started.  
</div>
<br>
<?php
}
?>