<?php
require("global.php");
$tab = "Wallet";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Wallet - Alphex</title>
    <?php include("templates/head.php"); ?>
  </head>
  <body>
    <?php include("templates/navbar.php"); ?>
    <div class="container">
      <br>
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link active" href="#balances" data-toggle="tab" role="tab">Balances</a></li>
        <li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab" role="tab">History</a></li>
      </ul>
      <br>
      <div class="tab-content">
        <div class="tab-pane active" id="balances" role="tabpanel"><?php include("_wallet/balances.php"); ?></div>
        <div class="tab-pane" id="history" role="tabpanel"><?php include("_wallet/history.php"); ?></div>
      </div>
		</div>
    <?php include("templates/footer.php"); ?>
  </body>
</html>
