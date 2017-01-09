<?php
if (!isset($_GET["a"])) header("location: trading?a=eth");

require("global.php");
$tab = "Trading";

$coin_1 = $_GET["m"] ? $_GET["m"] : "BTC";
$coin_2 = $_GET["c"] ? $_GET["c"] : "ETH";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Trading - Alphex</title>
    <?php include("templates/head.php"); ?>
  </head>
  <body>
    <?php include("templates/navbar.php"); ?>
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9">
          <?php include("chart/main.php"); ?>
          <br>
          <?php include("trad/alert/main.php"); ?>
          <div class="row mb-0">
            <div class="col-sm-3"><?php include("_trading/limit_buy/main.php"); ?></div>
            <div class="col-sm-3"><?php include("_trading/market_buy/main.php"); ?></div>
            <div class="col-sm-3"><?php include("_trading/limit_sell/main.php"); ?></div>
            <div class="col-sm-3"><?php include("_trading/market_sell/main.php"); ?></div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-4"><?php include("_trading/bids/main.php"); ?></div>
            <div class="col-sm-4"><?php include("_trading/asks/main.php"); ?></div>
            <div class="col-sm-4"><?php include("_trading/trades/main.php"); ?></div>
          </div>
          <br>
          <?php include("_trading/depth.php"); ?>
        </div>
        <div class="col-sm-3">
          <?php include("_trading/markets/main.php"); ?>
          <br>
          <?php include("_trading/overview.php"); ?>
          <br>
          <?php include("_trading/positions/main.php"); ?>
          <br>
          <?php include("_trading/main.php"); ?>
        </div>
      </div>
		</div>
    <?php include("templates/footer.php"); ?>
  </body>
</html>
