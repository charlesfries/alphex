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
    <div class="row-fluid">
      
  		<div class="col-sm-2">
				<ul class="footer-ul">
					<li><h6 class="fancy">Trading</h6></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">API Docs</a></li>
					<li><a href="#">Fees</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms of Service</a></li>
				</ul>
			</div>
  		<div class="col-sm-2">
				<ul class="footer-ul">
					<li><h6 class="fancy">Company</h6></li>
					<li><a href="#">Company Info</a></li>
					<li><a href="#">Security</a></li>
					<li><a href="#">Getting Started</a></li>
					<li><a href="#">Identity Verify</a></li>
          <li><a href="#">Card Verify</a></li>
				</ul>
			</div>
  		<div class="col-sm-2">
				<ul class="footer-ul">
					<li><h6 class="fancy">News</h6></li>
          <li><a href="/about/company">Company Info</a></li>
          <li><a href="#">For Business</a></li>
					<li><a href="#">Press Releases</a></li>
          <li><a href="#">Status</a></li>
          <li><a href="#">Blog</a></li>
				</ul>
			</div>
      <div class="col-sm-1"></div>
  		<div class="col-sm-5">
        <ul class="footer-ul">
          <li><h4 class="fancy"><!--<i class="fa fa-bank"></i> -->Alphex</h4></li>
          <li>Server time: <?=htmlspecialchars($server_time)?></li>
					<li>Users currently online: <?=htmlspecialchars($users_online)?></li>
					<li>24hr volume: <?=htmlspecialchars($btc_volume)?> BTC / <?=htmlspecialchars($eth_volume)?> ETH / <?=htmlspecialchars($xmr_volume)?> XMR / <?=htmlspecialchars($ltc_online)?> LTC</li>
					<li>&copy; <?=htmlspecialchars(date("Y"))?> Alphex, Inc. / Wilmington, DE / Designed in California</li>
          <li>
            <a href="//twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
            &nbsp;
            <a href="//www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
            &nbsp;
            <a href="//www.reddit.com/r/Bitcoin/" target="_blank"><i class="fa fa-reddit-alien"></i></a>
            &nbsp;
            <a href="//itunes.apple.com/" target="_blank"><i class="fa fa-apple"></i></a>
            &nbsp;
            <a href="https://play.google.com/store/apps/details?id=de.schildbach.wallet&hl=en" target="_blank"><i class="fa fa-android"></i></a>
          </li>
				</ul>
			</div>					
  	</div>
  </div>
</div>