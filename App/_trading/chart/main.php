<div id="price_chart"></div>
<script type="text/javascript" src="https://cdn.cryptowat.ch/assets/build/scripts/dist/embed.js"></script>
<script>
  var pair = "<?=htmlspecialchars($coin_2)?><?=htmlspecialchars($coin_1)?>";

  var chart = new cryptowatch.Embed("poloniex", pair, {
    timePeriod: "15m",
    customColorScheme: {
      bg:           "FFFFFF",
      text:         "8e8e8e",
      textStrong:   "cecece",
      textWeak:     "727272",
      short:        "E15252",
      shortFill:    "E15252",
      long:         "49B864",
      longFill:     "49B864",
      cta:          "363D52",
      ctaHighlight: "414A67",
      alert:        "FFD506",
  	}
  });
  chart.mount("#price_chart");
</script>