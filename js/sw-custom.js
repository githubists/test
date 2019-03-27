workbox.googleAnalytics.initialize();
workbox.routing.setDefaultHandler(
  new workbox.strategies.StaleWhileRevalidate()
);
workbox.routing.setCatchHandler(({event}) => {
  console.log(event.request.destination);
      return caches.match(workbox.precaching.getCacheKeyForURL('/offline.html'));
});
