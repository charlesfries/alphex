<h5 class="fancy">Chat</h5>
<?php
if ($authenticated) {
?>
<hr class="mt-0">
<?=$alert?>
<form id="chat_form">
  <div class="form-group">
    <input id="chat_message" placeholder="Have something to say?" type="text" class="form-control form-control-sm">
  </div>
</form>
<?php
}
?>
<div id="chat_table"></div>

<script>

$(function()
{
  console.log("Ready!");
});

get_chat();

function get_chat()
{
  $("#chat_table").on("load", "chat/refresh.php", function()
  {
    setTimeout(get_chat, 1000);
  });
}


/*get_chat();

function get_chat()
{
  $("#chat_table").load("chat/refresh.php", function()
  {
    setTimeout(get_chat, 500);
  });
}*/

$("#chat_form").submit(function(e)
{
  var data = "message=" + $("#chat_message").val();

  $.ajax({
    type: "POST",
    url: "chat/send.php",
    data: data,
    success: function(data)
    {
      get_chat();
      document.getElementById("chat_message").value = "";
    }
  });

  e.preventDefault();
});
</script>
