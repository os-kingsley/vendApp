
import("https://www.gstatic.com/firebasejs/6.4.2/firebase-app.js");
import("https://www.gstatic.com/firebasejs/6.4.1/firebase-auth.js");

import("https://cdn.firebase.com/libs/firebaseui/4.1.0/firebaseui.js");

 //The core Firebase JS SDK is always required and must be listed first

// TODO: Add SDKs for Firebase products that you want to use
  //   https://firebase.google.com/docs/web/setup#config-web-app -->


  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCMmuTyC-dXGi-nh04CKwKEH58Fbwfs1NY",
    authDomain: "merch-ec503.firebaseapp.com",
    databaseURL: "https://merch-ec503.firebaseio.com",
    projectId: "merch-ec503",
    storageBucket: "",
    messagingSenderId: "1476728604",
    appId: "1:1476728604:web:373f420f443887d8"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);





      // FirebaseUI config.
      var ui = new firebaseui.auth.AuthUI(firebase.auth());

   ui.start('#firebaseui-auth-container', {

    signInSuccessUrl: '/buyer-registration',
  signInOptions: [
    {
      provider: firebase.auth.PhoneAuthProvider.PROVIDER_ID,
      recaptchaParameters: {
        type: 'image', // 'audio'
        size: 'invisible', // 'invisible' or 'compact'
        badge: 'inline' //' bottomright' or 'inline' applies to invisible.
      },
      defaultCountry: 'NG', // Set default country to the United Kingdom (+44).
      // For prefilling the national number, set defaultNationNumber.
      // This will only be observed if only phone Auth provider is used since
      // for multiple providers, the NASCAR screen will always render first
      // with a 'sign in with phone number' button.
      //defaultNationalNumber: '8100000000',
      // You can also pass the full phone number string instead of the
      // 'defaultCountry' and 'defaultNationalNumber'. However, in this case,
      // the first country ID that matches the country code will be used to
      // populate the country selector. So for countries that share the same
      // country code, the selected country may not be the expected one.
      // In that case, pass the 'defaultCountry' instead to ensure the exact
      // country is selected. The 'defaultCountry' and 'defaultNationaNumber'
      // will always have higher priority than 'loginHint' which will be ignored
      // in their favor. In this case, the default country will be 'GB' even
      // though 'loginHint' specified the country code as '+1'.
      //loginHint: '+2348100000000',
      // You can provide a 'whitelistedCountries' or 'blacklistedCountries' for
      // countries to select. It takes an array of either ISO (alpha-2) or
      // E164 (prefix with '+') formatted country codes. If 'defaultCountry' is
      // not whitelisted or is blacklisted, the default country will be set to the
      // first country available (alphabetical order). Notice that
      // 'whitelistedCountries' and 'blacklistedCountries' cannot be specified
      // at the same time.
      //whitelistedCountries: ['US', '+44']
    }
  ]
});


      // Initialize the FirebaseUI Widget using Firebase.
     // var ui = new firebaseui.auth.AuthUI(firebase.auth());
      // The start method will wait until the DOM is loaded.
     // ui.start('#firebaseui-auth-container', uiConfig);
  

  
       
      initApp = function() {
        firebase.auth().onAuthStateChanged(function(user) {
          if (user) {
            // User is signed in.
            var displayName = user.displayName;
            var email = user.email;
            var emailVerified = user.emailVerified;
            var photoURL = user.photoURL;
            var uid = user.uid;
            var phoneNumber = user.phoneNumber;
            var providerData = user.providerData;
            user.getIdToken().then(function(accessToken) {
              document.getElementById('sign-in-status').textContent = 'Signed in';
              document.getElementById('sign-in').textContent = 'Sign out';
              document.getElementById("user-phone").value = phoneNumber;
              document.getElementById('account-details').textContent = JSON.stringify({
                displayName: displayName,
                email: email,
                emailVerified: emailVerified,
                phoneNumber: phoneNumber,
                photoURL: photoURL,
                uid: uid,
                accessToken: accessToken,
                providerData: providerData
              }, null, '  ');
            });
          } else {
            // User is signed out.
            document.getElementById('sign-in-status').textContent = 'Signed out';
            document.getElementById('sign-in').textContent = 'Sign in';
            document.getElementById('account-details').textContent = 'null';
          }
        }, function(error) {
          console.log(error);
        });
      };

      window.addEventListener('load', function() {
        initApp();
      });
    
    


$(function(){
setTimeout(function(){
      firebase.auth().signOut().then(function() {
  console.log('Signed Out');
}, function(error) {
  console.error('Sign Out Error', error);
});
    
},3600000);
});
    
