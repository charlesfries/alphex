

<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?=htmlspecialchars($title)?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Based in the United States, Alphex is a leading blockchain asset exchange offering over 20 Bitcoin (BTC) markets available for trading.">
    <meta name="keywords" content="bitcoin, cryptocurrency, ethereum, litecoin, blockchain, exchange, margin, trading, lending, funding, index, stock, commodity, invest, profit, money, gold, silver">
    <meta name="author" content="Alphex">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="apple-touch-icon" href="/img/icon.png">
    <script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  </head>
  <body>

    <h2>Chat Test</h2>

    <div id="chat_table"></div>

    <script type="text/javascript">




      function get_chat() {
        $(document).get("refresh.php", function(data)
        {
             $("#chat_table").html(data);

             console.log("Got!");
        });


      }

      get_chat();

      var it = setInterval(get_chat, 1000);


      $(function()
      {
        console.log("Ready!");
      });



      function get_chat()
      {
        console.log("Getting data...");

        //$("#chat_table").html("Loading...");

        $(document).get("test/refresh.php", function(data)
        {
             $("#chat_table").html(data);

             console.log("Got!");
        });


      }

      get_chat();

      var it = setInterval(get_chat, 1000);
    </script>

    <!--<script type="text/javascript">

    function get_chat()
    {
        jQuery.get("test/refresh.php", function(data)
        {
             $("#chat_table").html(data);
        });
    }

    get_chat();

    var it = setInterval(get_chat, 1000);




    $(function()
    {
      console.log("Ready!");
    });
  </script>-->

  </body>
</html>
