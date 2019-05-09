<?=$prefix?>
  <title>館内案内 | 東京大学 第92回 五月祭 医学部企画</title>
  <link rel="canonical" href="https://utmed-mayfes.net/map">
  <meta name="description" content="東京大学 第92回五月祭 医学部企画『医へのいざない』の公式ウェブサイトです。2019年は第71回目で、今年もクイズ・ゲーム・学術展示等面白い企画を沢山ご用意しております。皆様のご来場をお待ちしております。"/>
  <meta property="og:title" content="館内案内 | 東大医学部 五月祭企画 医へのいざない" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://utmed-mayfes.net/timetable" />
  <meta property="og:image" content="https://utmed-mayfes.net/img/header/header-og-1x-50-withtext.jpg" />
  <meta property="og:description" content="東京大学 第92回五月祭 医学部企画『医へのいざない』の館内案内図です。" />
<?=$header?>
.map-lightbox {
      width: 100%;
      height: 100%;
      position: absolute;
      display: flex;
      align-items: center;
      justify-content: center;
    }
<?=$menu?>
<?=$navbar?>
<main id="content" role="main" class="">
  <article class="px2">
      <section class="">
          <h2 class="relative">館内案内図</h2>
          <div class="m2">
              <h3>東京大学本郷キャンパス 医学部本館</h3>
              <i class="flex flex-wrap justify-around mt2 col-12">
                <amp-img src="/img/map/Title.png" width="1785" height="216" alt="" layout="responsive" class=""></amp-img>
                <button on="tap:3f">
                  <amp-img src="/img/map/3F.png" width="1785" height="585" alt="" layout="responsive" class=""></amp-img>
                </button>
                <button on="tap:2f">
                  <amp-img src="/img/map/2F.png" width="1785" height="735" alt="" layout="responsive" class=""></amp-img>
                </button>
                <button on="tap:1f">
                  <amp-img src="/img/map/1F.png" width="1785" height="987" alt="" layout="responsive" class=""></amp-img>
                </button>
              </i>
          </div>
      </section>
  </article>
</main>
<button class="controls scrollToTop p0"on="tap:top.scrollTo(duration=200)"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><title>ScrollToTop</title><polyline stroke="#fff" fill="none" points="10 32 25 18 40 32"/></svg></button>
<amp-lightbox id="1f" layout="nodisplay" scrollable="">
  <div class="map-lightbox" role="button" tabindex="0" on="tap:1f.close">
    <amp-img src="/img/map/map2D-1F.png" width="3509" height="2481" alt="" layout="responsive" class="col-12 justify-center"></amp-img>
  </div>
</amp-lightbox>
<amp-lightbox id="2f" layout="nodisplay" scrollable="">
  <div class="map-lightbox" role="button" tabindex="0" on="tap:2f.close">
    <amp-img src="/img/map/map2D-2F.png" width="3509" height="2481" alt="" layout="responsive" class="col-12 justify-center"></amp-img>
  </div>
</amp-lightbox>
<amp-lightbox id="3f" layout="nodisplay" scrollable="">
  <div class="map-lightbox" role="button" tabindex="0" on="tap:3f.close">
    <amp-img src="/img/map/map2D-3F.png" width="3509" height="2481" alt="" layout="responsive" class="col-12 justify-center"></amp-img>
  </div>
</amp-lightbox>
<?=$footer?>
