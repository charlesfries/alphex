get_trades();

function get_trades() {
  $("#trades_table").load("/_lending/trades/retrieve.php", function() {
    setTimeout(get_trades, 250);
  });
}
