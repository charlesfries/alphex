<?php
function resolve_tab($tably)
{
  global $tab;
  return ($tab == $tably) ? ' active' : '';
}
?>
<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand mr-2" href="/"><img src="/img/logo.png" height="22"></a>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item<?=resolve_tab("Trading")?>"><a class="nav-link" href="/trading">Trading</a></li>
      <li class="nav-item<?=resolve_tab("Lending")?>"><a class="nav-link" href="/lending">Lending</a></li>
    </ul>
    <ul class="nav navbar-nav float-xs-right">
      <?php
      if ($authenticated) {
      ?>
      <li class="nav-item<?=resolve_tab("Wallet")?>"><a class="nav-link" href="/wallet">Wallet</a></li>
      <li class="nav-item<?=resolve_tab("Profile")?>"><a class="nav-link" href="/profile"><?=htmlspecialchars($authenticated_user)?></a></li>
      <li class="nav-item"><a class="nav-link" href="?signout=✓">Sign Out</a></li>
      <?php
      } else {
      ?>
      <li class="nav-item<?=resolve_tab("Sign In")?>"><a class="nav-link" href="/signin">Sign In</a></li>
      <li class="nav-item<?=resolve_tab("Sign Up")?>"><a class="nav-link" href="/signup">Sign Up</a></li>
      <?php
      }
      ?>
    </ul>
  </div>
</nav>
