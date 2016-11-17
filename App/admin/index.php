<?php
require("../global.php");
$tab = "";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin - Alphex</title>
    <?php include("../templates/head.php"); ?>
  </head>
  <body>
    <?php include("../templates/navbar.php"); ?>
    <div class="container">
      <br>
      
      <div class="row">
        <div class="col-sm-4">
          
          <h5 class="fancy">Overview</h5>
          <div class="table-responsive">
            <table class="table table-sm table-hover microprint mb-0">
              <thead>
                <tr>
                  <th nowrap>Name</th>
                  <th nowrap>Value</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Total Value</td>
                  <td>$0.00</td>
                </tr>
                <tr>
                  <td>Total Margin</td>
                  <td>$0.00</td>
                </tr>
              </tbody>
            </table>
          </div>
          
        </div>
        <div class="col-sm-4">
          
          <h5 class="fancy">Wallets by Coin</h5>
          <div class="table-responsive">
            <table class="table table-sm table-hover microprint mb-0">
              <thead>
                <tr>
                  <th nowrap>Coin</th>
                  <th nowrap>Name</th>
                  <th nowrap>Balance</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = $db->prepare("SELECT * FROM coins ORDER BY symbol");
                $sql->execute();
                while ($res = $sql->fetch())
                {
                  $total = 0;
                  
                  $total = number_format($total, 8, ".", "");
                  
                  echo '<tr>';
                  echo '<td nowrap>'.htmlspecialchars($res["symbol"]).'</td>';
                  echo '<td nowrap>'.htmlspecialchars($res["name"]).'</td>';
                  echo '<td nowrap>'.htmlspecialchars($total).'</td>';
                  echo '</tr>';
                }
                ?>
              </tbody>
            </table>
          </div>
          
        </div>
        <div class="col-sm-4">
          
          <h5 class="fancy">Users by Balance</h5>
          <div class="table-responsive">
            <table class="table table-sm table-hover microprint mb-0">
              <thead>
                <tr>
                  <th nowrap>Username</th>
                  <th nowrap>Last Request</th>
                  <th nowrap>Balance</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = $db->prepare("SELECT * FROM users LIMIT 20");
                $sql->execute();
                while ($res = $sql->fetch())
                {
                  $balance = $vault->get_balance("BTC");
                  $username = $res["username"];
                  $activity = time_elapsed($res["activity"]);
                  
                  $balance = number_format($balance, 8, ".", "");
                  
                  echo '<tr>';
                  echo '<td nowrap>'.htmlspecialchars($username).'</td>';
                  echo '<td nowrap>'.htmlspecialchars($activity).'</td>';
                  echo '<td nowrap>'.htmlspecialchars($balance).'</td>';
                  echo '</tr>';
                }
                ?>
              </tbody>
            </table>
          </div>
          
        </div>
      </div>
    </div>
    
    <?php include("../templates/footer.php"); ?>
  </body>
</html>