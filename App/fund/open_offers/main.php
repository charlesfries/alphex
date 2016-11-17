<div id="open_offers_table"></div>
<script>
  retrieve_open_offers();

  function retrieve_open_offers() {
    $("#open_offers_table").load("/fund/open_offers/refresh.php", function() {
      setTimeout(retrieve_open_offers, 250);
    });
  }
  
  function close(id) {

    var data = "id=" + id;
    
    $.ajax({
      url: "/controllers/close_offer.php",
      type: "POST",
      data: data,
      success: function(data) {
        
      }
    });
  }
</script>