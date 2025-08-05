const CACHE_NAME = 'educonnect-v1';
const urlsToCache = [
  '/',
  '/index.php',
  '/assets/tailwind.min.css',
  '/assets/main.js',
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => cache.addAll(urlsToCache))
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(resp => resp || fetch(event.request))
  );
});
