<?php
require("global.php");
$tab = "";

if ($_POST["reset"])
{

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reset Password - Alphex</title>
    <?php include("templates/head.php"); ?>
  </head>
  <body>
    <?php include("templates/navbar.php"); ?>
    <div class="container">
      <br>
      <div class="row">
        <div class="col-4 offset-2">
          <h4 class="fancy">Reset Password</h4>
          <hr class="mt-0">
          <?=$sign_in_alert?>
          <form action="" method="post">
            <fieldset class="form-group">
              <input name="email" value="<?=htmlspecialchars($_POST["email"])?>" placeholder="Email" type="email" class="form-control" autofocus>
            </fieldset>
            <fieldset class="form-group">
              <input name="sign_in" type="submit" value="Reset" class="btn btn-primary">
            </fieldset>
          </form>
        </div>
      </div>
		</div>
    <?php include("templates/footer.php"); ?>
  </body>
</html>
