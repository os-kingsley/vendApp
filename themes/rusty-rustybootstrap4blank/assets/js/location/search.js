  let search_dropdown = $('#search');

search_dropdown.empty();


search_dropdown.prop('selectedIndex', 0);

const url = '/location.json';

// Populate search_dropdown with list of provinces
$.getJSON(url, function (data) {
  $.each(data, function (key, entry) {
    search_dropdown.append($('<option></option>').attr('value',  entry.city).text(entry.city));
  })
});



