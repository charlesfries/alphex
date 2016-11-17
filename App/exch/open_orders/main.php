<div id="open_orders_table"></div>
<script>
  retrieve_open_orders();

  function retrieve_open_orders() {
    $("#open_orders_table").load("/exch/open_orders/refresh.php", function() {
      setTimeout(retrieve_open_orders, 250);
    });
  }
  
  function close(id) {

    var data = "id=" + id;
    
    $.ajax({
      url: "/controllers/close_order.php",
      type: "POST",
      data: data,
      success: function(data) {
        
      }
    });
  }
</script>