/**
 * Welcome to your Workbox-powered service worker!
 *
 * You'll need to register this file in your web app and you should
 * disable HTTP caching for this file too.
 * See https://goo.gl/nhQhGp
 *
 * The rest of the code is auto-generated. Please don't update this file
 * directly; instead, make changes to your Workbox build configuration
 * and re-run your build process.
 * See https://goo.gl/2aRDsh
 */

importScripts("https://storage.googleapis.com/workbox-cdn/releases/4.1.1/workbox-sw.js");

importScripts(
  "js/sw-custom.js"
);

self.addEventListener('message', (event) => {
  if (event.data && event.data.type === 'SKIP_WAITING') {
    self.skipWaiting();
  }
});

/**
 * The workboxSW.precacheAndRoute() method efficiently caches and responds to
 * requests for URLs in the manifest.
 * See https://goo.gl/S9QRab
 */
self.__precacheManifest = [
  {
    "url": "favicon.ico",
    "revision": "8ad58e852ca47b6d9278b239474a57f3"
  },
  {
    "url": "manifest.json",
    "revision": "635ba1e16dcc8c33ea9cee92160ce4a1"
  },
  {
    "url": "fonts/kosugimaru-regular.woff2",
    "revision": "d4f0464b535f1b489fe9350a57f0e675"
  },
  {
    "url": "img/clients/fujigakuin-banner-1x.jpg",
    "revision": "15aa12b71c5a0f0f757087bc35241153"
  },
  {
    "url": "img/clients/fujigakuin-banner-2x.jpg",
    "revision": "131d7553495ca27e2eea4575a28de208"
  },
  {
    "url": "img/clients/fujigakuin-banner-4x.jpg",
    "revision": "f989dc95067d17c8cbc50f8f4f5debf2"
  },
  {
    "url": "img/clients/tomas-banner.jpg",
    "revision": "49b41140a82ada91e6dbc9aa255022db"
  },
  {
    "url": "img/contents/exhibition/bookshelf.jpg",
    "revision": "c25f9d138d208348d2ef3ad4e3b08fc8"
  },
  {
    "url": "img/contents/exhibition/disaster.jpg",
    "revision": "bedf060eb5cdb21fb69df543d3388427"
  },
  {
    "url": "img/contents/exhibition/drama.jpg",
    "revision": "be4a99b1fa64e16d7cb47d69be231da4"
  },
  {
    "url": "img/contents/exhibition/history.jpg",
    "revision": "a3082853942c26ad77dd4a212b9ac14e"
  },
  {
    "url": "img/contents/exhibition/muscle.jpg",
    "revision": "8d52af60801070a0569f9865488bee7e"
  },
  {
    "url": "img/contents/exhibition/narrative.jpg",
    "revision": "bb242621477a4c0cfea0ce9435d8eb45"
  },
  {
    "url": "img/contents/exhibition/research.jpg",
    "revision": "d59210881093927ddfad2fc29fe10dcd"
  },
  {
    "url": "img/contents/exhibition/sketch.jpg",
    "revision": "cee1967461760e3da6338f95f9ca0512"
  },
  {
    "url": "img/contents/exhibition/toxin.jpg",
    "revision": "36265071015da66dd292278f2e02f45c"
  },
  {
    "url": "img/contents/experience/artery.jpg",
    "revision": "94523730f541a4f92085d4922c657079"
  },
  {
    "url": "img/contents/experience/beat.jpg",
    "revision": "7fb7a7ebb515a2ae2d861a8e31648574"
  },
  {
    "url": "img/contents/experience/bp.jpg",
    "revision": "36ecca89ff67341fdae489142ed576b7"
  },
  {
    "url": "img/contents/experience/coat.jpg",
    "revision": "9499026913b856c05ded407a16f782e1"
  },
  {
    "url": "img/contents/experience/emergency.jpg",
    "revision": "3685a1323ecf3de71374b2c4a611f07d"
  },
  {
    "url": "img/contents/experience/organ.jpg",
    "revision": "996c2f6dce38f7b1949c380dc37117e5"
  },
  {
    "url": "img/contents/experience/quiz.jpg",
    "revision": "15a42546a125894861c87eab2fcc3822"
  },
  {
    "url": "img/contents/experience/surgery.jpg",
    "revision": "26a4da82afc910f7eb16620324479736"
  },
  {
    "url": "img/contents/experience/vr.jpg",
    "revision": "352c425c6df63a9480598d2017732ae3"
  },
  {
    "url": "img/contents/misc/art.jpg",
    "revision": "b30a42cbc715d9cd70bc0ad1123f7d9a"
  },
  {
    "url": "img/contents/misc/cafe.jpg",
    "revision": "e1d8bed151b130106792c2494850cdd7"
  },
  {
    "url": "img/contents/misc/chamber.jpg",
    "revision": "bad23fd84409f74e7ac30527e3c48c76"
  },
  {
    "url": "img/contents/misc/goods2.jpg",
    "revision": "d4516e7b27b4f15b6b1500740866556e"
  },
  {
    "url": "img/contents/misc/lecture.jpg",
    "revision": "0bfefaf7d182b4ee01a73e20936eb902"
  },
  {
    "url": "img/contents/misc/piano.jpg",
    "revision": "200df7034a13c10b2f6d206e64008867"
  },
  {
    "url": "img/dock/dock-about-1x.png",
    "revision": "dab92860a22e9d5d13e4e78970361cbf"
  },
  {
    "url": "img/dock/dock-access-1x.png",
    "revision": "69a3a6957d94a6a609bc88a053e28f9d"
  },
  {
    "url": "img/dock/dock-contents-1x.png",
    "revision": "727559db864e8776368706d68e4f57f5"
  },
  {
    "url": "img/dock/dock-recommended-1x.png",
    "revision": "a18179643dea83f8a6bf146311be4094"
  },
  {
    "url": "img/dock/dock-sns-1x.png",
    "revision": "73e6b3281ac0c1b5bb1680da23d101d2"
  },
  {
    "url": "img/dock/dock-timetable-1x.png",
    "revision": "344bf31089dcd3d1dfef97451163f2e3"
  },
  {
    "url": "img/header/header-16x9-2x-50-withtext.jpg",
    "revision": "324a784e5a32741ed0154fb9e236c8f8"
  },
  {
    "url": "img/header/header-1x1-2x-50-withtext.jpg",
    "revision": "803346837513ce175dcaba0ed5716c35"
  },
  {
    "url": "img/header/header-4x3-2x-50-withtext.jpg",
    "revision": "58dfdde7c455c22460552af89e2de740"
  },
  {
    "url": "img/header/header-og-1x-50-withtext.jpg",
    "revision": "3605713380caaad510d0a774a6837ff4"
  },
  {
    "url": "img/header/header2-4x3-2x-50-trimmed.jpg",
    "revision": "572aceffb79416822acb163de6577d45"
  },
  {
    "url": "img/header/header2-mobile-1x-50.jpg",
    "revision": "2b3ad3abc2821109523e432975b000e0"
  },
  {
    "url": "img/header/header2-mobile-2x-50.jpg",
    "revision": "5c2ad9252e24c70c1fdabf1538c1c42f"
  },
  {
    "url": "img/icon/icon114.png",
    "revision": "604d829989438d89caa0424cd7564895"
  },
  {
    "url": "img/icon/icon120.png",
    "revision": "226f5ac7f70c40d43cfa631a306a7a80"
  },
  {
    "url": "img/icon/icon128.png",
    "revision": "8801ee6b8899af9d33d5b9b5c1a533e1"
  },
  {
    "url": "img/icon/icon144.png",
    "revision": "31fec025428e09d767b1889b2a35afb3"
  },
  {
    "url": "img/icon/icon152.png",
    "revision": "db76254311e2e3c50804cc637b3274e3"
  },
  {
    "url": "img/icon/icon16.png",
    "revision": "f6424821a03ee762504f94a3c52d5430"
  },
  {
    "url": "img/icon/icon180.png",
    "revision": "c5583bf33b99520caf2ee1a33b52311b"
  },
  {
    "url": "img/icon/icon192.png",
    "revision": "3c518e219b071582082cf58c6a9b9869"
  },
  {
    "url": "img/icon/icon24.png",
    "revision": "7ed13bec6bd2b5d0ea7a90541dcf0d1c"
  },
  {
    "url": "img/icon/icon256.png",
    "revision": "e271996cddf9adbf1cb200f4815ce2d2"
  },
  {
    "url": "img/icon/icon32.png",
    "revision": "4474678616b67d578c5ec31fdae75f00"
  },
  {
    "url": "img/icon/icon384.png",
    "revision": "bc57059f64dfef61f940f1da8cfa4c6a"
  },
  {
    "url": "img/icon/icon48.png",
    "revision": "0f75c932b8b43e17a3483b1b8d2807f4"
  },
  {
    "url": "img/icon/icon512.png",
    "revision": "6481439a3f485d573a7cbe1d55392257"
  },
  {
    "url": "img/icon/icon57.png",
    "revision": "184f3a7110d770d4dba0c41ccf9664ba"
  },
  {
    "url": "img/icon/icon64.png",
    "revision": "f9b549224646648fd67e62ee36d5754e"
  },
  {
    "url": "img/icon/icon72.png",
    "revision": "b00bfa99b08f81a0f217c9ee47e5dde7"
  },
  {
    "url": "img/icon/icon720.png",
    "revision": "a2d80edbd8d78dc3f3726e7f30e271b9"
  },
  {
    "url": "img/icon/icon76.png",
    "revision": "caf101720c9cfe6678cb39c154af6dfd"
  },
  {
    "url": "img/icon/icon96.png",
    "revision": "19e664938062435f5e986a79552d52b5"
  },
  {
    "url": "img/menulogo.png",
    "revision": "0cf13f14b702371a35be0c560d27b565"
  },
  {
    "url": "img/nav_bg.jpg",
    "revision": "912831b2314a5a60f28f210bedc98030"
  },
  {
    "url": "js/main.js",
    "revision": "1624a1fa0eadab987c68db1e7fd9df97"
  }
].concat(self.__precacheManifest || []);
workbox.precaching.precacheAndRoute(self.__precacheManifest, {});

workbox.routing.registerRoute(/\/[^\.]*$/, new workbox.strategies.NetworkFirst({ "cacheName":"pages", plugins: [new workbox.expiration.Plugin({ maxEntries: 30, maxAgeSeconds: 28800, purgeOnQuotaError: false }), new workbox.cacheableResponse.Plugin({ statuses: [ 0, 200 ] })] }), 'GET');
workbox.routing.registerRoute(/^https:\/\/cdn.ampproject.org/, new workbox.strategies.StaleWhileRevalidate({ plugins: [new workbox.cacheableResponse.Plugin({ statuses: [ 0, 200 ] })] }), 'GET');
workbox.routing.registerRoute(/^https:\/\/www.googletagmanager.com/, new workbox.strategies.StaleWhileRevalidate({ plugins: [new workbox.cacheableResponse.Plugin({ statuses: [ 0, 200 ] })] }), 'GET');

workbox.googleAnalytics.initialize({});
