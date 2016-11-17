
<h5 class="fancy">2FA</h5>
<hr class="mt-0">
<div class="row">
  <div class="col-sm-6">

    <p>Two-factor authentication is currently <span class="text-danger">off</span> for your account.</p>

    <p class="mb-0">
      <form class="form-inline">
        <fieldset class="form-group">
          <input type="password" class="form-control" placeholder="Password">
        </fieldset>
        <button type="submit" class="btn btn-primary">Enable</button>
      </form>
    </p>
    
  </div>
  <div class="col-sm-6">
    
    <form>
      <fieldset class="form-check">
        <b>Require two-factor authentication for:</b>
      </fieldset>
      <fieldset class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" disabled> Withdrawals of any amount
        </label>
      </fieldset>
      <fieldset class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" disabled> Exchanges of any amount
        </label>
      </fieldset>
      <fieldset class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" disabled> Orders of any amount
        </label>
      </fieldset>
      <fieldset class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" disabled> Lending of any amount
        </label>
      </fieldset>
    </form>
    
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-6">
    
    <h5 class="fancy">Login History</h5>
    <div class="table-responsive">
      <table class="table table-sm table-hover microprint mb-0">
        <thead>
          <tr>
            <th nowrap>Time</th>
            <th nowrap>IP Address</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = $db->prepare("SELECT * FROM logins ORDER BY id DESC LIMIT 5");
          $sql->execute();
          while ($res = $sql->fetch())
          {
            $time = time_elapsed($res["time"]);
            $ip_address = $res["ip_address"];
            
            echo '<tr>';
            echo '<td nowrap>'.htmlspecialchars($time).'</td>';
            echo '<td nowrap>'.htmlspecialchars($ip_address).'</td>';
            echo '</tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
    
  </div>
  <div class="col-sm-6">
  </div>
</div>