<?php
require("global.php");
$tab = "";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Company - Alphex</title>
    <?php include("templates/head.php"); ?>
  </head>
  <body>
    <?php include("templates/navbar.php"); ?>
    <div class="container pb-0">
      <br>
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link active" href="#about" data-toggle="tab" role="tab">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#careers" data-toggle="tab" role="tab">Careers</a></li>
        <li class="nav-item"><a class="nav-link" href="#press" data-toggle="tab" role="tab">Press</a></li>
      </ul>
      <br>
      <div class="tab-content">
        <div class="tab-pane active" id="about" role="tabpanel"><?php include("_company/about.php"); ?></div>
        <div class="tab-pane" id="careers" role="tabpanel"><?php include("_company/careers.php"); ?></div>
        <div class="tab-pane" id="press" role="tabpanel"><?php include("_company/press.php"); ?></div>
      </div>
		</div>
    <?php include("templates/footer.php"); ?>
  </body>
</html>
