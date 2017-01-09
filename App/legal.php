<?php
require("global.php");
$tab = "";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Legal - Alphex</title>
    <?php include("templates/head.php"); ?>
  </head>
  <body>
    <?php include("templates/navbar.php"); ?>
    <div class="container pb-0">
      <br>
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link active" href="#user_agreement" data-toggle="tab" role="tab">User Agreement</a></li>
        <li class="nav-item"><a class="nav-link" href="#privacy_policy" data-toggle="tab" role="tab">Privacy Policy</a></li>
        <li class="nav-item"><a class="nav-link" href="#licenses" data-toggle="tab" role="tab">Licenses</a></li>
      </ul>
      <br>
      <div class="tab-content">
        <div class="tab-pane active" id="user_agreement" role="tabpanel"><?php include("_legal/user_agreement.php"); ?></div>
        <div class="tab-pane" id="privacy_policy" role="tabpanel"><?php include("_legal/privacy_policy.php"); ?></div>
        <div class="tab-pane" id="licenses" role="tabpanel"><?php include("_legal/licenses.php"); ?></div>
      </div>
		</div>
    <?php include("templates/footer.php"); ?>
  </body>
</html>
