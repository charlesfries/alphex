<?php
if (!isset($_GET["a"]) || !isset($_GET["b"])) header("location: exchange?a=btc&b=eth");

require("global.php");
$tab = "Exchange";

$coin_1 = strtoupper($_GET["a"]);
$coin_2 = strtoupper($_GET["b"]);

$coin_1_balance = $vault->get_balance($coin_1);
$coin_1_balance_str = number_format($coin_1_balance, 8, ".", "");

$coin_2_balance = $vault->get_balance($coin_2);
$coin_2_balance_str = number_format($coin_2_balance, 8, ".", "");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Exchange - Alphex</title>
    <?php include("templates/header.php"); ?>
  </head>
  <body>
    <?php include("templates/navbar.php"); ?>
    <div class="container-fluid">
      <br>
      <div class="row">
        <div class="col-sm-2">
          <?php include("act.php"); ?>
          <br>
          <?php include("_trading/markets/main.php"); ?>
        </div>
        <div class="col-sm-10">
          <?php include("chart/main.php"); ?>
          <br>
          <?php include("_trading/alert/main.php"); ?>
          <!--<div class="row mb-0">
            <div class="col-sm-3"><?php include("_trading/limit_buy/main.php"); ?></div>
            <div class="col-sm-3"><?php include("_trading/market_buy/main.php"); ?></div>
            <div class="col-sm-3"><?php include("_trading/limit_sell/main.php"); ?></div>
            <div class="col-sm-3"><?php include("_trading/market_sell/main.php"); ?></div>
          </div>
          <br>-->
          <div class="row">
            <div class="col-sm-4"><?php include("_trading/bids/main.php"); ?></div>
            <div class="col-sm-4"><?php include("_trading/asks/main.php"); ?></div>
            <div class="col-sm-4"><?php include("_trading/trades/main.php"); ?></div>
          </div>
          <br>
          <?php include("_trading/depth/main.php"); ?>
        </div>
        <!--<div class="col-sm-3">
          <?php include("_trading/markets/main.php"); ?>
          <br>
          <?php include("_trading/open_orders/main.php"); ?>
          <br>
          <?php include("chat/main.php"); ?>
        </div>-->
      </div>
		</div>
    <?php include("templates/footer.php"); ?>
  </body>
</html>
