import("https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js");
import("https://cdn.jsdelivr.net/npm/places.js@1.16.4");
 

(function() {
  var placesAutocomplete = places({
    appId: 'plO6HQTHX7IF',
    apiKey: '549b54d1c283a09285583fc3c8ba6014',
    container: document.querySelector('#single-country-search')
  }).configure({
    countries: ['ng']
  });

  var $address = document.querySelector('#single-country-address-value')
  placesAutocomplete.on('change', function(e) {
    $address.textContent = e.suggestion.value
  });

  placesAutocomplete.on('clear', function() {
    $address.textContent = 'none';
  });

  var $country = document.querySelector('#country-selector')
  $country.addEventListener('change', function(e){
    placesAutocomplete.configure({ countries: [e.target.value] });
  })

})();

//visibility toggle added to place file
