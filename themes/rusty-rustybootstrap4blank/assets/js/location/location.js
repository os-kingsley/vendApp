 let location_dropdown = $('#postform');

location_dropdown.empty();


location_dropdown.prop('selectedIndex', 0);

const url = '/location.json';

// Populate location_dropdown with list of provinces
$.getJSON(url, function (data) {
  $.each(data, function (key, entry) {
    location_dropdown.append($('<option></option>').attr('value', entry.city + ',' + ' ' + entry.admin + ',' + ' ' + entry.country ).text(entry.city + ',' +  ' ' + entry.admin + ',' + ' ' + entry.country));
  })
});



