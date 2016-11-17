get_sells();

function get_sells() {
  $("#sell_orders").load("/fund/asks/retrieve.php", function() {
    setTimeout(get_sells, 250);
  });
}