<?php
require("global.php");
$tab = "";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Alphex - Bitcoin/Cryptocurrency Exchange</title>
    <?php include("templates/head.php"); ?>
  </head>
  <body>
    <?php include("templates/navbar.php"); ?>
    <div class="jumbotron mb-0">
      <div class="container">
        <br><br>
        <center>
          <h1 class="display-4">Welcome to Alphex.</h1>
          <p class="lead">The ultimate securities trading platform. We are a cryptocurrency exchange built online, offering maximum security and advanced trading features. Trade any leading blockchain asset for any other.</p>
          <hr class="m-y-2">
          <p>Start trading today on the safest, fastest asset exchange in the world.</p>
          <p class="lead"><a class="btn btn-warning btn-lg" href="/exchange" role="button">Explore markets &rarr;</a></p>
        </center>
        <br><br>
      </div>
    </div>
    <br>
    <div class="container">
      <br>
      <div class="row">
        <div class="col-sm-3">
          <center>
            <h4 class="fancy"><i class="fa fa-globe"></i> Global</h4>
            <p>Trade the major financial markets from anywhere in the world using first-class tools. <a href="#">Our markets &raquo;</a></p>
          </center>
        </div>
        <div class="col-sm-3">
          <center>
            <h4 class="fancy"><i class="fa fa-lock"></i> Secure</h4>
            <p>100% cold storage, 2FA, and encryption keep customer funds safe. <a href="#">Learn more &raquo;</a></p>
          </center>
        </div>
        <div class="col-sm-3">
          <center>
            <h4 class="fancy"><i class="fa fa-low-vision"></i> Anonymous</h4>
            <p>Since Alphex is powered by Bitcoin, no personal information is required from new users.</p>
          </center>
        </div>
        <div class="col-sm-3">
          <center>
            <h4 class="fancy"><i class="fa fa-shield"></i> Trusted</h4>
            <p>Over 10,000 traders use Alphex to trade the financial markets using soley decentralized assets.</p>
          </center>
        </div>
      </div>
      <br>
      <hr>
      <br><br>
      <div class="row">
        <div class="col-sm-4">
          <center><h5 class="fancy">Best-in-Class Tools</h5></center>
          <ul>
            <li>Stop-limit orders to reduce trading risk</li>
            <li>SMA and two EMA lines ready for your customization</li>
            <li>5-minute, 15-minute, 30-minute, 2-hour, and 4-hour candlesticks</li>
            <li>Fully zoomable charts that cover complete market history</li>
          </ul>
        </div>
        <div class="col-sm-4">
          <center><h5 class="fancy">For Your Protection</h5></center>
          <ul>
            <li>Majority of customer funds kept in cold storage</li>
            <li>Entire exchange continually audited and inspected for unusual activity</li>
            <li>Two-factor authentication available for your protection</li>
          </ul>
        </div>
        <div class="col-sm-4">
          <center><h5 class="fancy">Community and Support</h5></center>
          <ul>
            <li>All support tickets resolved promptly and with care</li>
            <li>An active, vibrant chatbox community for idea-sharing and updates</li>
            <li>Chatbox moderators available to address your immediate questions and concerns</li>
          </ul>
        </div>
      </div>
		  <br>
    </div>
    <?php include("templates/footer.php"); ?>
  </body>
</html>
