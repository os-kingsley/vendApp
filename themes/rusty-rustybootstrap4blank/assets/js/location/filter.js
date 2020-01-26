  let filter_dropdown = $('#places');

filter_dropdown.empty();


filter_dropdown.prop('selectedIndex', 0);

const url = '/location.json';

// Populate filter_dropdown with list of provinces
$.getJSON(url, function (data) {
  $.each(data, function (key, entry) {
    filter_dropdown.append($('<option></option>').attr('value',  entry.city).text(entry.city));
  })
});


