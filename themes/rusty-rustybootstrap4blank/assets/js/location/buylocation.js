 let buy_dropdown = $('#buy_dropdown');

buy_dropdown.empty();


buy_dropdown.prop('selectedIndex', 0);

const url = '/location.json';

// Populate buy_dropdown with list of provinces
$.getJSON(url, function (data) {
  $.each(data, function (key, entry) {
    buy_dropdown.append($('<option></option>').attr('value', entry.city + ',' + ' ' + entry.admin + ',' + ' ' + entry.country ).text(entry.city + ',' +  ' ' + entry.admin + ',' + ' ' + entry.country));
  })
});