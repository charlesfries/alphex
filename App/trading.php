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
            <div class="col-sm-3"><?php include("trad/limit_buy/main.php"); ?></div>
            <div class="col-sm-3"><?php include("trad/market_buy/main.php"); ?></div>
            <div class="col-sm-3"><?php include("trad/limit_sell/main.php"); ?></div>
            <div class="col-sm-3"><?php include("trad/market_sell/main.php"); ?></div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-4"><?php include("trad/bids/main.php"); ?></div>
            <div class="col-sm-4"><?php include("trad/asks/main.php"); ?></div>
            <div class="col-sm-4"><?php include("trad/trades/main.php"); ?></div>
          </div>
          <br>
          <?php include("trad/depth.php"); ?>
        </div>
        <div class="col-sm-3">
          <?php include("trad/markets/main.php"); ?>
          <br>
          <?php include("trad/overview.php"); ?>
          <br>
          <?php include("trad/positions/main.php"); ?>
          <br>
          <?php include("chat/main.php"); ?>
        </div>
      </div>
		</div>
    <?php include("templates/footer.php"); ?>
  </body>
</html>