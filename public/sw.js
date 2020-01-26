importScripts('https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js');
importScripts('https://www.gstatic.com/firebasejs/4.13.0/firebase-app.js');



if (workbox) {
 


/**
  

  workbox.routing.registerRoute(
  /\.js$/,
  new workbox.strategies.NetworkFirst()
);

  workbox.routing.registerRoute(
  // Cache CSS files.
  /\.css$/,
  // Use cache but update in the background.
  new workbox.strategies.StaleWhileRevalidate({
    // Use a custom cache name.
    cacheName: 'css-cache',
  })
);
 /^\/$/  
**/

 
   
   workbox.precaching.precacheAndRoute([
  {
    "url": "icon-128x128.png",
    "revision": "af75a93ca2c343f1129dd7ee02fd4da7"
  },
  {
    "url": "icon-144x144.png",
    "revision": "5b04435be751d86b9aac918af3e48997"
  },
  {
    "url": "icon-152x152.png",
    "revision": "c036ab7b4ebee3339acd7dbc9e57a7b5"
  },
  {
    "url": "icon-192x192.png",
    "revision": "a1ad68fab4a907d1566cb82e55c5b748"
  },
  {
    "url": "icon-384x384.png",
    "revision": "a1ad68fab4a907d1566cb82e55c5b748"
  },
  {
    "url": "icon-512x512.png",
    "revision": "a1ad68fab4a907d1566cb82e55c5b748"
  },
  {
    "url": "icon-72x72.png",
    "revision": "a79a51291ef13c2d1e18215e09ee0bbc"
  },
  {
    "url": "icon-96x96.png",
    "revision": "8c56c11fe9ccf8dc39a768e983a411d4"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/custom-css/start-template.css",
    "revision": "0eb31cb94f82caae7ee18671b1088dc1"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/abstract.jpg",
    "revision": "cc12f20d74c1c7f9cc81a3c0a745ff1d"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/bootstraplogo.PNG",
    "revision": "2720628db453ef957c03ba0353cb37da"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/camera.png",
    "revision": "eb988a9ed5c1e13fe1dcf90a13b17c65"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/cashon.jpg",
    "revision": "870a0cbfd6aabfda7c03facb9c11c0ca"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/flutter.png",
    "revision": "01806a1b4e5a55443ed0c7f20339585e"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/four.png",
    "revision": "7e67c094958726dc20756df320aae84d"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/hugo.png",
    "revision": "24dbdf01ae141d935e8d90a8e4ac902d"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/icons/icon-128x128.png",
    "revision": "af75a93ca2c343f1129dd7ee02fd4da7"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/icons/icon-144x144.png",
    "revision": "5b04435be751d86b9aac918af3e48997"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/icons/icon-152x152.png",
    "revision": "c036ab7b4ebee3339acd7dbc9e57a7b5"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/icons/icon-192x192.png",
    "revision": "a1ad68fab4a907d1566cb82e55c5b748"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/icons/icon-384x384.png",
    "revision": "a1ad68fab4a907d1566cb82e55c5b748"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/icons/icon-512x512.png",
    "revision": "a1ad68fab4a907d1566cb82e55c5b748"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/icons/icon-72x72.png",
    "revision": "a79a51291ef13c2d1e18215e09ee0bbc"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/icons/icon-96x96.png",
    "revision": "8c56c11fe9ccf8dc39a768e983a411d4"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/icons8-naira-96.png",
    "revision": "8dd5b8c6129f55aa44b4b6d5206ab18b"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/list.png",
    "revision": "8f0223ce6d94e35d818b2a27d2688c38"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/log.png",
    "revision": "578bd8d88ec7be5d8e57143d212638ef"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/logo1.png",
    "revision": "b8022ad87ca9fd757afb846e0eed6e1a"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/logo2.png",
    "revision": "8bb3fb0795bf383c52c31a2b17b01365"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/logo3.png",
    "revision": "d4b6a1695cbaca3b3246cf491ed13a8d"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/logo4.png",
    "revision": "ad4a089d8cb70d3dc5f7ffdd168b8ab3"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/logo5.png",
    "revision": "9a432aa62def51fc90229cbdb4cc9bcd"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/logo7.png",
    "revision": "ab9e7277b517112f7f247abf18441da8"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/naira.png",
    "revision": "3803f564a7b516071d2fe29e7c44b3e5"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/noimage.jpg",
    "revision": "6525eb42e89e342fa1a0f0b8908bffbe"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/one.png",
    "revision": "42ea00e861b17f69e3f82c4efd0fb063"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/pad.png",
    "revision": "893c76c3e2d1573368a994b79b0454bf"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/pay.png",
    "revision": "86b450bc615fc339c4c5e4e3a339b52d"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/pay1.png",
    "revision": "173b2e979c56746c7a6f7ea20de63a4b"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/payscrow2.png",
    "revision": "94def6200c911d72dd10d2dec89ffe6b"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/point.png",
    "revision": "c878ff8c4259400f0c77a0452185a484"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/power-1.png",
    "revision": "eb54f7f38de71531a18d7462927b71fd"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/power-2.png",
    "revision": "5b43c1d35040c2f8efe828fa307efd8b"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/power.png",
    "revision": "1d96e14a1fa6cd5d5f09080d505e2e7d"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/power1.png",
    "revision": "433db538a6e009f5fba22e36e642cfd7"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/rave-logo.png",
    "revision": "8038694e5943afc8262dd5f047c47ff4"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/seller.png",
    "revision": "240ec4762b2cea946476d7a73874705a"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/send.png",
    "revision": "ae10c058f5c88f0fc09e8931e62abddf"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/shake.png",
    "revision": "752dd1a6a5e132b970fb28bb4328a21c"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/sign.png",
    "revision": "c8342b7aade7e1aec7447c2abaf73172"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/signin.png",
    "revision": "541ad146c18a21f042744407d06856a6"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/tele.png",
    "revision": "1a28e17d23b1a768ad1776320d44da4f"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/three.png",
    "revision": "df5e553ceae5be47edea98931e729a74"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/two.png",
    "revision": "8a7cdb829bc581753fd14a6792d9a59d"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/images/write.png",
    "revision": "d3dfa702efb52bc59b918c77f17acded"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/vendor/font-awesome-463/css/font-awesome.css",
    "revision": "a16730221cf9c8b1bad3dd5419edf16b"
  },
  {
    "url": "themes/rusty-rustybootstrap4blank/assets/vendor/font-awesome-463/css/font-awesome.min.css",
    "revision": "bb53ad7bffecc0014d64553e96501dce"
  },
 
]);



workbox.routing.registerRoute(
 /^\/$/,
  new workbox.strategies.NetworkFirst({
    cacheName: 'static-resources',
  })
);

workbox.routing.registerRoute(
 /^\/([^/]+\.htm)$/,
  new workbox.strategies.NetworkFirst({
    cacheName: 'static-resources',
  })
);


/**

  workbox.routing.registerRoute(
  /\.(?:js|css)$/,
  new workbox.strategies.StaleWhileRevalidate({
    cacheName: 'static-resources',
  })
);
**/

  workbox.routing.registerRoute(
  /\.(?:js|css)$/,
  new workbox.strategies.StaleWhileRevalidate({
    cacheName: 'static-resources',
  })
);




workbox.routing.registerRoute(
  // Cache image files.
  /\.(?:png|jpg|jpeg|svg|gif)$/,
  // Use the cache if it's available.
  new workbox.strategies.CacheFirst({
    // Use a custom cache name.
    cacheName: 'image-cache',
    plugins: [
      new workbox.expiration.Plugin({
        // Cache only 50 images.
        maxEntries: 50,
        // Cache for a maximum of a week.
        maxAgeSeconds: 7 * 24 * 60 * 60,
      })
    ],
  })
);
 console.log(`Yay! Workbox is loaded 🎉`);
   
} else {
  console.log(`Boo! Workbox didn't load 😬`);
}









