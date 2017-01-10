<?php
$server_time = date("Y-m-d H:i e");

$sql = $db->prepare("SELECT id FROM users WHERE activity > (NOW() - 60 * 20)");
$sql->execute();
$users_online = $sql->rowCount();

$btc_volume = 20990;
$eth_volume = 4251;
$xmr_volume = 1324;
$ltc_online = 1287;
?>
<br>
<div class="footsy">
  <div class="container">
    <div class="row">
  		<div class="col-2">
				<ul class="footer-ul">
					<li><h6 class="fancy">Products</h6></li>
          <li><a href="#">Exchange</a></li>
          <li><a href="#">Wallet</a></li>
					<li><a href="#">Explorer</a></li>
          <li><a href="#">Finder</a></li>
				</ul>
			</div>
  		<div class="col-2">
				<ul class="footer-ul">
					<li><h6 class="fancy">Tools</h6></li>
					<li><a href="#">API Docs</a></li>
					<li><a href="#">Mobile App</a></li>
				</ul>
			</div>
  		<div class="col-2">
				<ul class="footer-ul">
					<li><h6 class="fancy">Company</h6></li>
          <li><a href="/company">Contact Us</a></li>
          <li><a href="/company">Press</a></li>
          <li><a href="/company">Fees</a></li>
					<li><a href="/privacy">Privacy Policy</a></li>
          <li><a href="/terms">Terms of Use</a></li>
				</ul>
			</div>
      <div class="col-1"></div>
  		<div class="col-5">
        <ul class="footer-ul">
          <li><img src="/img/logo.png" height="22"></li>
          <li>Server time: <?=htmlspecialchars($server_time)?></li>
					<li>Users online: <?=htmlspecialchars($users_online)?></li>
					<li>
            24hr volume: <?=htmlspecialchars($btc_volume)?> BTC /
            <?=htmlspecialchars($eth_volume)?> ETH /
            <?=htmlspecialchars($xmr_volume)?> XMR /
            <?=htmlspecialchars($ltc_online)?> LTC
          </li>
					<li>
            &copy; <?=htmlspecialchars(date("Y"))?> Alphex, Inc. /
            Wilmington, DE /
            Designed in California</li>
          <li>
            <a target="_blank" href="//twitter.com/alphexco"><i class="fa fa-twitter"></i></a> &nbsp;
            <a target="_blank" href="//www.facebook.com/alphexco"><i class="fa fa-facebook"></i></a> &nbsp;
            <a target="_blank" href="//www.linkedin.com/company/alphex"><i class="fa fa-linkedin"></i></a> &nbsp;
            <a target="_blank" href="//angel.co/alphex"><i class="fa fa-angellist"></i></a> &nbsp;
            <a target="_blank" href="//itunes.apple.com/"><i class="fa fa-apple"></i></a> &nbsp;
            <a target="_blank" href="//play.google.com/"><i class="fa fa-android"></i></a>
          </li>
				</ul>
			</div>
  	</div>
  </div>
</div>
