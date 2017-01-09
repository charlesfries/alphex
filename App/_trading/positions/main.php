<div id="positions_table"></div>
<script>
retrieve_positions();

function retrieve_positions()
{
  $("#positions_table").load("/trad/positions/refresh.php", function() {
    setTimeout(retrieve_positions, 1000);
  });
}

function close(id)
{
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