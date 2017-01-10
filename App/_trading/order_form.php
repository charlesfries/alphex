<form>
  <div class="form-group mb-1">
    <select class="form-control form-control-sm">
      <option>Limit</option>
      <option>Market</option>
      <option>Stop</option>
      <option>Trailing Stop</option>
      <option>Fill or Kill</option>
    </select>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col">
        <small class="form-text text-muted">Size (BTC)</small>
        <input type="text" class="form-control form-control-sm">
      </div>
      <div class="col">
        <small class="form-text text-muted">Price (ETH)</small>
        <input type="text" class="form-control form-control-sm">
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col">
        <button type="button" class="btn btn-success btn-sm btn-block">Buy</button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-danger btn-sm btn-block">Sell</button>
      </div>
    </div>
  </div>
</form>
