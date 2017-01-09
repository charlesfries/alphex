<?php
require("global.php");
$tab = "Sign In";

if ($_POST["sign_in"])
{
  $sql = $db->prepare("SELECT * FROM users WHERE email=?");
  $sql->execute([$_POST["email"]]);
  $res = $sql->fetch();
  if (!password_verify($_POST["password"], $res["password"]))
  {
    $sign_in_alert = '<p class="text-danger">Email and password combination is incorrect.</p>';
  }
  else
  {
    $username = $res["username"];
    $ip_address = $_SERVER["REMOTE_ADDR"];

    $sql = $db->prepare("INSERT INTO logins (username, ip_address) VALUES (?, ?)");
    $sql->execute([$username, $ip_address]);

    $_SESSION["authenticated_user"] = $username;
    header("location: /");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign In - Alphex</title>
    <?php include("templates/head.php"); ?>
  </head>
  <body>
    <?php include("templates/navbar.php"); ?>
    <div class="container">
      <br>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
          <h4 class="fancy">Sign In</h4>
          <hr class="mt-0">
          <?=$sign_in_alert?>
          <form action="" method="post">
            <fieldset class="form-group">
              <input name="email" value="<?=htmlspecialchars($_POST["email"])?>" placeholder="Email" type="email" class="form-control" autofocus>
            </fieldset>
            <fieldset class="form-group">
              <input name="password" placeholder="Password" type="password" class="form-control">
              <small class="form-text text-muted"><a href="#">Forgot your password?</a></small>
            </fieldset>
            <fieldset class="form-group">
              <input name="sign_in" type="submit" value="Sign In" class="btn btn-primary">
            </fieldset>
          </form>
        </div>
        <div class="col-sm-4">
          <h4 class="fancy">Don't have an account?</h4>
          <hr class="mt-0">
          <a href="/signup" class="btn btn-primary" role="button">Sign Up</a>
        </div>
      </div>
		</div>
    <?php include("templates/footer.php"); ?>
  </body>
</html>
