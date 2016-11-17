<div class="row">
  <div class="col-sm-2">
    <p>
      Name:<br>
      Email:<br>
      Password:<br>
      Username:<br>
      Phone:<br>
      Local Currency:
    </p>
  </div>
  <div class="col-sm-3">
    <p>
      <?=htmlspecialchars($res["first_name"]." ".$res["last_name"])?><br>
      <?=htmlspecialchars($res["email"])?><br>
      ********<br>
      <?=htmlspecialchars($res["username"])?><br>
      <?=htmlspecialchars($res["phone"])?><br>
      <?=htmlspecialchars($res["local_currency"])?><br>
    </p>
  </div>
  <div class="col-sm-3">
    <p>
      <a href="#">Change</a><br>
      <a href="#">Change</a><br>
      <a href="#">Change</a><br>
      <a href="#">Change</a><br>
      <a href="#">Change</a><br>
      <a href="#">Change</a>
    </p>
  </div>
</div>