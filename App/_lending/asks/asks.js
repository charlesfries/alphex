get_sells();

function get_sells() {
  $("#sell_orders").load("/_lending/asks/retrieve.php", function() {
    setTimeout(get_sells, 250);
  });
}
