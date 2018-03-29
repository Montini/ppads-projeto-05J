var files = [
    "index.html",
    "faculdade-ccbs.html",
    "faculdade-ccl.html",
    "faculdade-ccsa.html",
    "faculdade-ceft.html",
    "faculdade-ee.html",
    "faculdade-fau.html",
    "faculdade-fci.html",
    "faculdade-fd.html",
    "loja-Benjamin.html",
    "loja-bobs.html",
    "loja-college.html",
    "loja-koni.html",
    "loja-mrcheney.html",
    "loja-spremuto.html",
    "loja-starbucks.html",
    "lojas.html",
    "manifest.json",
    "css/main.css",
    "icons/MaterialIcons-Regular.ttf",
    "icons/material.css",
    "img/entrada.jpg",
    "img/icon.png",
    "js/install.js",
    "js/main.js",
    "js/spa.js",
    "img/loja/ccbs.jpg",
    "img/loja/ccl.jpg",
    "img/loja/ccsa.jpg",
    "img/loja/ceft.jpg",
    "img/loja/ee.jpg",
    "img/loja/fau.jpg",
    "img/loja/fci.jpg",
    "img/loja/fd.jpg",
    "img/loja/benjamin.jpg",
    "img/loja/bobs.jpg",
    "img/loja/college.jpg",
    "img/loja/koni.jpg",
    "img/loja/mrcheney.jpg",
    "img/loja/spremuto.jpg",
    "img/loja/starbucks.jpg",
    "js/vendor/jquery.min.js",
    "js/vendor/materialize-0.97.0.min.js",
    "js/vendor/quagga.min.js"
];
// dev only
if (typeof files == 'undefined') {
  var files = [];
} else {
  files.push('./');
}

var CACHE_NAME = 'shopping-v13';

self.addEventListener('activate', function(event) {
  console.log('[SW] Activate');
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.map(function(cacheName) {
          if (CACHE_NAME.indexOf(cacheName) == -1) {
            console.log('[SW] Delete cache:', cacheName);
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

self.addEventListener('install', function(event){
  console.log('[SW] Install');
  event.waitUntil(
    caches.open(CACHE_NAME).then(function(cache) {
      return Promise.all(
      	files.map(function(file){
      		return cache.add(file);
      	})
      );
    })
  );
});

self.addEventListener('fetch', function(event) {
  console.log('[SW] fetch ' + event.request.url)
  event.respondWith(
    caches.match(event.request).then(function(response){
      return response || fetch(event.request.clone());
    })
  );
});

self.addEventListener('notificationclick', function(event) {
  console.log('On notification click: ', event);
  clients.openWindow('/');
});