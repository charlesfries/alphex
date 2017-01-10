<?php
function resolve_tab($tably)
{
  global $tab;
  return ($tab == $tably) ? ' active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?=htmlspecialchars($title)?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Based in the United States, Alphex is a leading blockchain asset exchange offering over 20 Bitcoin (BTC) markets available for trading.">
    <meta name="keywords" content="bitcoin, cryptocurrency, ethereum, litecoin, blockchain, exchange, margin, trading, lending, funding, index, stock, commodity, invest, profit, money, gold, silver">
    <meta name="author" content="Alphex">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="apple-touch-icon" href="/img/icon.png">
    <script src="//code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="/img/logo.png" height="22"></a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item<?=resolve_tab("Trading")?>"><a class="nav-link" href="/trading">Trading</a></li>
          <li class="nav-item<?=resolve_tab("Lending")?>"><a class="nav-link" href="/lending">Lending</a></li>
        </ul>
        <ul class="nav navbar-nav float-xs-right">
          <?php if ($authenticated) { ?>
          <li class="nav-item<?=resolve_tab("Wallet")?>"><a class="nav-link" href="/wallet">Wallet</a></li>
          <li class="nav-item<?=resolve_tab("Profile")?>"><a class="nav-link" href="/profile"><?=htmlspecialchars($authenticated_user)?></a></li>
          <li class="nav-item"><a class="nav-link" href="?signout=✓">Sign Out</a></li>
          <?php } else { ?>
          <li class="nav-item<?=resolve_tab("Sign In")?>"><a class="nav-link" href="/signin">Sign In</a></li>
          <li class="nav-item<?=resolve_tab("Sign Up")?>"><a class="nav-link" href="/signup">Sign Up</a></li>
          <?php } ?>
        </ul>
      </div>
    </nav>
