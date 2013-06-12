$(document).ready(function() {
  updateTicker();

  setInterval(function() {
    updateTicker();
  }, 10000);

  $('.dropdown-toggle').dropdown();

  $("#currency-selector a").click(function(e) {
    e.preventDefault();

    $("#best-bid").html('--');
    $("#best-ask").html('--');

    label = $(this).html();
    val = $(this).attr('data-value');
    $("input[name='current-currency']").val(val);
    $("body").trigger("changeCurrency");
    $("#current-currency-label").html(label);
    $(".currency-pair-label").html(label);

    $(this).closest('.btn-group').removeClass('open');
    $(this).closest('.btn-group').find('.dropdown-toggle').removeClass('active');

    $.ajax({
      url: '/market_data/ajax_set_currency',
      type: 'POST',
      dataType: 'json',
      data: {
        currency_id: val
      },
      success: function(response) {
        updateTicker();
      }
    });
  });
});

updateTicker = function() {
  $.ajax({
    url: '/market_data/ajax_ticker',
    dataType: 'json',
    success: function(response) {
      switch ($("input[name='current-currency']").val()) {
        case "1":
          sigdig = 2;
          break;
        case "2":
          sigdig = 3;
          break;
        case "3":
          sigdig = 5;
          break;
      }
      bid = response.bid / 100000000;
      ask = response.ask / 100000000;

      $("#best-bid").html($.number(bid, sigdig));
      $("#best-ask").html($.number(ask, sigdig));

      $("#best-bid").attr('data-value', bid * 100000000);
      $("#best-ask").attr('data-value', ask * 100000000);
    }
  });
}