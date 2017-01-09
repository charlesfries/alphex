<?php
require("global.php");
$tab = "Profile";

$sql = $db->prepare("SELECT * FROM users WHERE username=?");
$sql->execute([$authenticated_user]);
$res = $sql->fetch();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile - Alphex</title>
    <?php include("templates/head.php"); ?>
  </head>
  <body>
    <?php include("templates/navbar.php"); ?>
    <div class="container pb-0">
      <br>
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link active" href="#info" data-toggle="tab" role="tab">Info</a></li>
        <li class="nav-item"><a class="nav-link" href="#security" data-toggle="tab" role="tab">Security</a></li>
        <li class="nav-item"><a class="nav-link" href="#notifications" data-toggle="tab" role="tab">Notifications</a></li>
        <li class="nav-item"><a class="nav-link" href="#reports" data-toggle="tab" role="tab">Reports</a></li>
        <li class="nav-item"><a class="nav-link" href="#api" data-toggle="tab" role="tab">API</a></li>
      </ul>
      <br>
      <div class="tab-content">
        <div class="tab-pane active" id="info" role="tabpanel"><?php include("_profile/info.php"); ?></div>
        <div class="tab-pane" id="security" role="tabpanel"><?php include("_profile/security.php"); ?></div>
        <div class="tab-pane" id="notifications" role="tabpanel"><?php include("_profile/notifications.php"); ?></div>
        <div class="tab-pane" id="reports" role="tabpanel"><?php include("_profile/reports.php"); ?></div>
        <div class="tab-pane" id="api" role="tabpanel"><?php include("_profile/api.php"); ?></div>
      </div>
		</div>
    <?php include("templates/footer.php"); ?>
  </body>
</html>
