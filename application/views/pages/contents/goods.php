<?=$prefix?>
  <title>グッズ | 東京大学 第92回 五月祭 医学部企画</title>
  <link rel="canonical" href="https://utmed-mayfes.net/contents/goods">
  <meta name="description" content="東京大学 第92回五月祭 医学部企画『医へのいざない』のグッズ紹介ページです。クリアファイル、ペン、ポストカード、受験本など、今年も様々な東大医学部グッズを販売しております。"/>
  <meta property="og:title" content="グッズ | 東大医学部 五月祭企画 医へのいざない" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://utmed-mayfes.net/contents/goods" />
  <meta property="og:image" content="https://utmed-mayfes.net/img/header/header-og-1x-50-withtext.jpg" />
  <meta property="og:description" content="東京大学 第92回五月祭 医学部企画『医へのいざない』のグッズ紹介ページです。クリアファイル、ペン、ポストカード、受験本など、今年も様々な東大医学部グッズを販売しております。" />
  <!-- Custom AMP Package other than lightbox accordion and sidebar-->
  <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
  <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
  <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
    <?=$header?>
    :root {
      --space-1: .5rem;  /* 8px */
      --space-2: 1rem;   /* 16px */
    }
    .goods-title {
      margin-top:3rem;
      padding: 0.2em 0.5em;
      background: #f4f4f4;
      border-left: solid 5px #7db4e6;
      border-bottom: solid 3px #d7d7d7;
      font-weight:600;
    }
    #carousel-with-preview amp-img {
       transition: opacity 1s ease-in-out;
     }
     .carousel-preview {
       display: flex;
       align-items: center;
       justify-content: center;
       background-color:#eee;
     }
     .carousel-preview > * {
       margin: var(--space-1);
       padding: 0;
     }
     .carousel-preview [selected] {
       opacity: 0.5;
       outline: none;
     }
     .carousel-preview .amp-carousel-slide {
       margin: var(--space-1);
       padding: 0;
     }
     .carousel-preview button:active {
       opacity: 0.5;
     }
     amp-carousel amp-img{
       background-color:#eee;
       border: 2px solid #eee
     }
     .goods-name{
       font-weight:600;
       text-decoration:underline;
     }

    <?=$menu?>
    <?=$navbar?>
    <main>
      <article class="px2">
        <section class="">
          <h2 class="relative">グッズ紹介</h2>
          <h3 class="h2 mb1 goods-title">受験本</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-6">
            <amp-carousel id="utbook"
              width="400"
              height="300"
              layout="responsive"
              type="slides"
              on="slideChange:
                      utbookSelector.toggle(index=event.index, value=true),
                      utbookPreview.goToSlide(index=event.index)
              " lightbox>
              <amp-img src="/img/goods/utbook/utbook-frontcover.jpg"
                width="1033"
                height="1458"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/utbook/utbook-pages-1.jpg"
                width="1033"
                height="1458"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/utbook/utbook-pages-2.jpg"
                width="1033"
                height="1458"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/utbook/utbook-pages-3.jpg"
                width="1033"
                height="1458"
                layout="responsive"
                alt="a sample image"></amp-img>
            </amp-carousel>
            <amp-selector id="utbookSelector"
              on="select:utbook.goToSlide(index=event.targetOption)"
              layout="container">
              <div id="utbookPreview"
                class="carousel-preview mt1"
                >
                <amp-img option="0"
                  selected
                  src="/img/goods/utbook/utbook-frontcover.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="1"
                  src="/img/goods/utbook/utbook-pages-1.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="2"
                  src="/img/goods/utbook/utbook-pages-2.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="3"
                  src="/img/goods/utbook/utbook-pages-3.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
              </div>
            </amp-selector>
            </div>
            <div class="md-px2 col-12 sm-col-8 md-col-6">
              <p>
                <span class="h4 block my1 goods-name">受験本 1000円</span>
                <span class="goods-explanation">東大入試のすべてが詰まった一冊です！勉強法をはじめ役立つ情報満載、受験生のマストアイテム！これを読んで合格を勝ち取ろう！！</span>
              </p>
            </div>
          </div>
        </section>
        <section class="">
          <h3 class="h2 mb1 goods-title">クリアファイル</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-6">
            <amp-carousel id="files"
              width="400"
              height="300"
              layout="responsive"
              type="slides"
              on="slideChange:
                      filesSelector.toggle(index=event.index, value=true),
                      filesPreview.goToSlide(index=event.index)
              " lightbox>
              <amp-img src="/img/goods/files/file-road-front.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/files/file-wave-front.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/files/file-wave2-front.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/files/file-wave2-back.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
            </amp-carousel>
            <amp-selector id="filesSelector"
              on="select:files.goToSlide(index=event.targetOption)"
              layout="container">
              <div id="filesPreview"
                class="carousel-preview mt1">
                <amp-img option="0"
                  selected
                  src="/img/goods/files/file-road-front.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="1"
                  src="/img/goods/files/file-wave-front.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="2"
                  src="/img/goods/files/file-wave2-front.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="3"
                  src="/img/goods/files/file-wave2-back.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
              </div>
            </amp-selector>
            </div>
            <div class="md-px2 col-12 sm-col-8 md-col-6">
              <p>
                <span class="h4 block my1 goods-name">クリアファイル 1冊400円</span>
                <span class="goods-explanation">今年度の装飾デザインがクリアファイルになりました！日常で使える便利グッズです。３柄ご用意しました。</span>
              </p>
            </div>
          </div>
        </section>
        <section class="">
          <h3 class="h2 mb1 goods-title">ノート</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-6">
            <amp-carousel id="notes"
              width="400"
              height="300"
              layout="responsive"
              type="slides"
              on="slideChange:
                      notesSelector.toggle(index=event.index, value=true),
                      notesPreview.goToSlide(index=event.index)
              " lightbox>
              <amp-img src="/img/goods/notes/note-pink-front.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/notes/note-blue-front.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/notes/note-white-front.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/notes/note-white-back.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
            </amp-carousel>
            <amp-selector id="notesSelector"
              on="select:notes.goToSlide(index=event.targetOption)"
              layout="container">
              <div id="notesPreview" class="carousel-preview mt1">
                <amp-img option="0"
                  selected
                  src="/img/goods/notes/note-pink-front.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="1"
                  src="/img/goods/notes/note-blue-front.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="2"
                  src="/img/goods/notes/note-white-front.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="3"
                  src="/img/goods/notes/note-white-back.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
              </div>
            </amp-selector>
            </div>
            <div class="md-px2 col-12 sm-col-8 md-col-6">
              <p>
                <span class="h4 block my1 goods-name">ノート 1冊400円</span>
                <span class="goods-explanation">もったいなくて使えない？？いやいや，使い終わった頃には成績up間違いなし！（科学的根拠はありません）。全３色ご用意しました。</span>
              </p>
            </div>
          </div>
        </section>

        <section class="">
          <h3 class="h2 mb1 goods-title">ポストカード</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-6">
            <amp-carousel id="postcards"
              width="400"
              height="300"
              layout="responsive"
              type="slides"
              on="slideChange:
                      postcardsSelector.toggle(index=event.index, value=true),
                      postcardsPreview.goToSlide(index=event.index)
              " lightbox>
              <amp-img src="/img/goods/postcards/post-road.jpg"
                width="602"
                height="875"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/postcards/post-wave.jpg"
                width="602"
                height="875"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/postcards/post-collage.jpg"
                width="875"
                height="602"
                layout="responsive"
                alt="a sample image"></amp-img>
            </amp-carousel>
            <amp-selector id="postcardsSelector"
              on="select:postcards.goToSlide(index=event.targetOption)"
              layout="container">
              <div id="notesPreview"
                class="carousel-preview mt1">
                <amp-img option="0"
                  selected
                  src="/img/goods/postcards/post-road.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="1"
                  src="/img/goods/postcards/post-wave.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="2"
                  src="/img/goods/postcards/post-collage.jpg"
                  width="60"
                  height="40"
                  alt="a sample image"></amp-img>
              </div>
            </amp-selector>
            </div>
            <div class="md-px2 col-12 sm-col-8 md-col-6">
              <p>
                <span class="h4 block my1 goods-name">ポストカード 3枚200円</span>
                <span class="goods-explanation">今年度が初の試みです！しかも限定100部の超レアアイテム。お土産にも最適です。３柄１セットで販売しております。</span>
              </p>
            </div>
          </div>
        </section>


        <section class="">
          <h3 class="h2 mb1 goods-title">ペン</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-6">
            <amp-carousel id="pen"
              width="400"
              height="300"
              layout="responsive"
              type="slides"
              lightbox>
              <amp-img src="/img/goods/pens.jpg"
                width="602"
                height="875"
                layout="responsive"
                alt="a sample image"></amp-img>
            </amp-carousel>
            </div>
            <div class="md-px2 col-12 sm-col-8 md-col-6">
              <p>
                <span class="h4 block my1 goods-name">シャーペン、ボールペン 1本400円</span>
                <span class="goods-explanation">
                  いずれも５色ご用意しております。<br>
                  ・青、ピンク、緑、オレンジ(共通)<br>
                  ・黒(シャーペンのみ)<br>
                  ・紫(ボールペンのみ)
                </span>
              </p>
            </div>
          </div>
        </section>
      </article>
    </main>
    <?=$vote?>
    <button class="controls scrollToTop p0"on="tap:top.scrollTo(duration=200)"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><title>ScrollToTop</title><polyline stroke="#fff" fill="none" points="10 32 25 18 40 32"/></svg></button>
  <?=$footer?>
