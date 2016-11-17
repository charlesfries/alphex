get_bids();

function get_bids() {
  $("#bids_table").load("/fund/bids/retrieve.php", function() {
    setTimeout(get_bids, 250);
  });
}