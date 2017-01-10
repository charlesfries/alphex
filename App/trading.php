<?php
if (!isset($_GET["a"])) header("location: trading?a=eth");

require("global.php");
$title = "Trading - Alphex";
$tab = "Trading";

$coin_1 = $_GET["m"] ? $_GET["m"] : "BTC";
$coin_2 = $_GET["c"] ? $_GET["c"] : "ETH";

include("templates/header.php");
?>
<br>
<div class="container-fluid">
  <div class="alert alert-warning minilert mb-0" role="alert">
    <strong>Notice!</strong> Alphex trading is in beta, but should be 100% up and running by mid to late January.
  </div>
  <br>
  <div class="row">
    <div class="col-sm-10">
      <?php include("_trading/chart/main.php"); ?>
      <br>
      <?php include("_trading/alert/main.php"); ?>
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
    <div class="col-sm-2">
      <?php include("_trading/order_form.php"); ?>
      <br>
      <?php include("_trading/markets/main.php"); ?>
      <br>
      <h5 class="fancy">Open Orders</h5>
      <?php include("_trading/open_orders/main.php"); ?>
      <br>
      <h5 class="fancy">Balances</h5>
      <?php include("_trading/balances/main.php"); ?>
      <!-- <br> -->
      <!-- <?php include("chat/main.php"); ?> -->
    </div>
  </div>
</div>
<?php
include("templates/footer.php");
?>
