<?php
if (!isset($_GET["a"])) header("location: lending?a=btc");

require("global.php");
$tab = "Lending";

$coin = strtoupper($_GET["a"]);

$coin_balance = $vault->get_balance($coin);
$coin_balance_str = number_format($coin_balance, 8, ".", "");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Funding - Alphex</title>
    <?php include("templates/head.php"); ?>
  </head>
  <body>
    <?php include("templates/navbar.php"); ?>
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9">
          <?php include("_lending/alert/main.php"); ?>
          <div class="row mb-0">
            <div class="col-sm-3"><?php include("_lending/offer/main.php"); ?></div>
            <div class="col-sm-5"><?php include("_lending/open_offers/main.php"); ?></div>
            <!-- <div class="col-sm-4"><?php include("_lending/active_offers/main.php"); ?></div> -->
          </div>
          <br>
          <div class="row">
            <div class="col-sm-4"><?php include("_lending/bids/bids.php"); ?></div>
            <div class="col-sm-4"><?php include("_lending/asks/asks.php"); ?></div>
            <div class="col-sm-4"><?php include("_lending/trades/trades.php"); ?></div>
          </div>
        </div>
        <div class="col-sm-3">
          <?php include("_lending/markets/markets.php"); ?>
          <br>
          <?php include("chat/main.php"); ?>
        </div>
      </div>
		</div>
    <?php include("templates/footer.php"); ?>
  </body>
</html>
