<?=$prefix?>
  <title>グッズ | 東京大学 第92回 五月祭 医学部企画</title>
  <link rel="canonical" href="https://utmed-mayfes.net/contents/goods">
  <meta name="description" content="東京大学 第92回五月祭 医学部企画『医へのいざない』のグッズ紹介ページです。クリアファイル、ペン、ポストカード、受験本など、今年も様々な東大医学部グッズを販売しております。"/>
  <meta property="og:title" content="Template | 東大医学部 五月祭企画 医へのいざない" />
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
    #carousel-with-preview amp-img {
       transition: opacity 1s ease-in-out;
     }
     .carousel-preview {
       display: flex;
       align-items: center;
       justify-content: center;
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
    <?=$menu?>
    <?=$navbar?>
    <main>
      <article class="px2">
        <section class="">
          <h2 class="relative">受験本</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-5">
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
              <amp-img src="/img/goods/utbook/utbook-backcover.jpg"
                width="1033"
                height="1458"
                layout="responsive"
                alt="a sample image"></amp-img>
            </amp-carousel>
            <amp-selector id="utbookSelector"
              on="select:utbook.goToSlide(index=event.targetOption)"
              layout="container">
              <amp-carousel id="utbookPreview"
                class="carousel-preview"
                height="100"
                layout="fixed-height"
                type="carousel">
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
                <amp-img option="4"
                  src="/img/goods/utbook/utbook-backcover.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
              </amp-carousel>
            </amp-selector>
            </div>
            <div class="col-12 sm-col-8 md-col-6 indented-paragraph">
              <p>みなさん，こんにちは。私たちは東京大学医学部医学科４年生，五月祭医学部企画における『2019東大入試研究』編集チームです。</p>
              <p>「東京大学医学部」は，日本で最高峰とされる東京大学の，さらに最難関と言われています。では，そんな東京大学医学部，一体どんな人たちがどうやって入ってきているのでしょう？</p>
              <p>本書は，そんな疑問を解決すべく，医学部医学科のメンバーの受験期の勉強法から医学部生の実生活まで，私たちのリアルをご紹介いたします。近年の東大入試の問題傾向の分析や医学部生へのアンケートコーナー，また最近の東大医学部入試における推薦入試や面接の体験談など，ここでしか手に入らない情報を盛りだくさんに詰め込みました。</p>
              <p>いま大学を目指している方（特に東京大学を目指している方）も，また医学部生に興味のある方も，きっと楽しんでお読みいただけると思います。</p>
              <p>なお，執筆者の価値観や体験をもとに書かれている部分が多分にありますので，あくまでも参考程度にご活用いただければ幸いです。</p>
            </div>
          </div>
        </section>
        <section class="">
          <h2 class="relative">クリアファイル</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-5">
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
              <amp-img src="/img/goods/files/file-road-back.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/files/file-wave-front.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/files/file-wave-back.jpg"
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
              <amp-carousel id="filesPreview"
                class="carousel-preview"
                height="100"
                layout="fixed-height"
                type="carousel">
                <amp-img option="0"
                  selected
                  src="/img/goods/files/file-road-front.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="1"
                  src="/img/goods/files/file-road-back.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="2"
                  src="/img/goods/files/file-wave-front.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="3"
                  src="/img/goods/files/file-wave-back.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="4"
                  src="/img/goods/files/file-wave2-front.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="5"
                  src="/img/goods/files/file-wave2-back.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
              </amp-carousel>
            </amp-selector>
            </div>
            <!--<div class="col-12 sm-col-8 md-col-6 indented-paragraph">
            </div>-->
          </div>
        </section>
        <section class="">
          <h2 class="relative">ノート</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-5">
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
              <amp-img src="/img/goods/notes/note-pink-back.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/notes/note-blue-front.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/goods/notes/note-blue-back.jpg"
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
              <amp-carousel id="utboolPreview"
                class="carousel-preview"
                height="100"
                layout="fixed-height"
                type="carousel">
                <amp-img option="0"
                  selected
                  src="/img/goods/notes/note-pink-front.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="1"
                  src="/img/goods/notes/note-pink-back.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="2"
                  src="/img/goods/notes/note-blue-front.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="3"
                  src="/img/goods/notes/note-blue-back.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="4"
                  src="/img/goods/notes/note-white-front.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="5"
                  src="/img/goods/notes/note-white-back.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
              </amp-carousel>
            </amp-selector>
            </div>
            <!--<div class="col-12 sm-col-8 md-col-6 indented-paragraph">
            </div>-->
          </div>
        </section>
        <section class="">
          <h2 class="relative">ポストカード</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-5">
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
              <amp-carousel id="utboolPreview"
                class="carousel-preview"
                height="100"
                layout="fixed-height"
                type="carousel">
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
              </amp-carousel>
            </amp-selector>
            </div>
            <!--<div class="col-12 sm-col-8 md-col-6 indented-paragraph">
            </div>-->
          </div>
        </section>
      </article>
    </main>
    <?=$vote?>
    <button class="controls scrollToTop p0"on="tap:top.scrollTo(duration=200)"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><title>ScrollToTop</title><polyline stroke="#fff" fill="none" points="10 32 25 18 40 32"/></svg></button>
  <?=$footer?>
