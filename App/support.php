<?php
require("global.php");
$tab = "Help";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Support - Alphex</title>
    <?php include("templates/head.php"); ?>
  </head>
  <body>
    <?php include("templates/navbar.php"); ?>
    <div class="container">
      <br>
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link active" href="#info" data-toggle="tab" role="tab">FAQ</a></li>
        <li class="nav-item"><a class="nav-link" href="#security" data-toggle="tab" role="tab">Guides</a></li>
        <li class="nav-item"><a class="nav-link" href="#notifications" data-toggle="tab" role="tab">Contact Us</a></li>
      </ul>
      <br>
      <h5 class="fancy">Getting Started</h5>
      <ul>
        <li><a href="#">What is Alphex?</a></li>
        <li><a href="#">What are the three account types and which should I choose?</a></li>
        <li><a href="#">Can I change my account type later?</a></li>
        <li><a href="#">How can I take advantage of Alphex's features even if I don't feel like buying any Bitcoin or Litecoin?</a></li>
        <li><a href="#">I would like to simply buy and/or sell Bitcoin, what should I do?</a></li>
      </ul>

      <h5 class="fancy">Security</h5>
      <ul>
        <li><a href="#">How secure is Alphex?</a></li>
        <li><a href="#">How secure is your cryptocurrency storage?</a></li>
        <li><a href="#">Where are your servers located?</a></li>
        <li><a href="#">How long do I stay logged in to Alphex?</a></li>
      </ul>

      <h5 class="fancy">Trading</h5>
      <ul>
        <li><a href="#">What types of orders does Alphex offer?</a></li>
        <li><a href="#">How do I open a margin position?</a></li>
        <li><a href="#">Interest Rate</a></li>
        <li><a href="#">What does it mean to "claim" my position?</a></li>
        <li><a href="#">I have money in my wallet but the system won't let me open a position, it says "NO RESERVE"?</a></li>
        <li><a href="#">What's your margin call policy? What is the minimum maintenance margin required?</a></li>
        <li><a href="#">What happens to my margin position when the underlying funds are no longer available?</a></li>
        <li><a href="#">What is a settlement?</a></li>
        <li><a href="#">Why do I receive this error when trying to place an order: "Can not place additional order at the moment"?</a></li>
      </ul>

      <h5 class="fancy">Margin Funding</h5>
      <ul>
        <li><a href="#">What is margin funding?</a></li>
        <li><a href="#">What is the difference between offering funding on a "daily" or "term" basis?</a></li>
        <li><a href="#">What is the minimum amount for offering funding?</a></li>
        <li><a href="#">What are the risks associated with offering funding?</a></li>
        <li><a href="#">How is the return on offered funding calculated?</a></li>
        <li><a href="#">When do I receive my return payment?</a></li>
        <li><a href="#">What is the "Flash Return Rate"?</a></li>
        <li><a href="#">Can traders withdraw the funds they are using?</a></li>
        <li><a href="#">What is the margin funding "auto-renew" feature?</a></li>
        <li><a href="#">Can I take back my funding that I have offered before the period I specified expires?</a></li>
      </ul>

      <h5 class="fancy">Moving Funds</h5>
      <ul>
        <li><a href="#">How long does it take for a cryptocurrency withdrawal to be processed?</a></li>
        <li><a href="#">How long does it take for a wire withdrawal to be processed?</a></li>
        <li><a href="#">What are tethers?</a></li>
        <li><a href="#">Ethereum Deposits</a></li>
      </ul>

      <h5 class="fancy">Fees</h5>
      <ul>
        <li><a href="#">What are the fees you charge?</a></li>
        <li><a href="#">Does Alphex give market makers preferential fees?</a></li>
      </ul>
      
      <h5 class="fancy">BitLicense</h5>
      <ul>
        <li><a href="#">What is the BitLicense?</a></li>
        <li><a href="#">What does this mean for New York residents?</a></li>
        <li><a href="#">Can NY residents still trade on margin with USD as collateral?</a></li>
        <li><a href="#">Can NY residents still provide USD margin funding?</a></li>
      </ul>
      
		</div>
    <?php include("templates/footer.php"); ?>
  </body>
</html>