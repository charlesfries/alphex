<h5 class="fancy">BTC/ETH</h5>
<hr class="mt-0">
<form>
  <div class="form-group">
    <select class="form-control form-control-sm" id="exampleSelect1">
      <option>Limit</option>
      <option>Market</option>
      <option>Stop</option>
      <option>Trailing Stop</option>
      <option>Fill or Kill</option>
    </select>
  </div>

  <fieldset class="form-group">
    <div class="row">
      <div class="col-xs-6">
        <input id="limit_buy_price" placeholder="Size (ETH)" type="text" class="form-control form-control-sm">
      </div>
      <div class="col-xs-6">
        <input id="limit_buy_price" placeholder="Price (BTC)" type="text" class="form-control form-control-sm">
      </div>
    </div>
  </fieldset>
  <fieldset class="form-group">
    <div class="input-group input-group-sm">
      <input id="limit_buy_total" placeholder="Total" type="text" class="form-control form-control-sm" disabled>
      <div class="input-group-addon"><?=htmlspecialchars($coin_1)?></div>
    </div>
  </fieldset>

  <div class="row">
    <div class="col-xs-6">
      <input value="Buy" type="submit" class="btn btn-success btn-block btn-sm mb-0"></button>
    </div>
    <div class="col-xs-6">
      <input value="Sell" type="submit" class="btn btn-danger btn-block btn-sm mb-0"></button>
    </div>
  </div>





</form>
