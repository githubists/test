<?=$prefix?>
  <title>カフェ | 東京大学 第92回 五月祭 医学部企画</title>
  <link rel="canonical" href="https://utmed-mayfes.net/contents/cafe">
  <meta name="description" content="東京大学 第92回五月祭 医学部企画『医へのいざない』の医学部カフェ企画紹介ページです。色が変わる！ハーブティーや免疫もちもちゆず茶サイダーなど、医学にまつわるメニューを用意しております。皆様のご来店を店員一同お待ちしております。"/>
  <meta property="og:title" content="カフェ | 東大医学部 五月祭企画 医へのいざない" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://utmed-mayfes.net/contents/cafe" />
  <meta property="og:image" content="https://utmed-mayfes.net/img/header/header-og-1x-50-withtext.jpg" />
  <meta property="og:description" content="東京大学 第92回五月祭 医学部企画『医へのいざない』の医学部カフェ企画紹介ページです。色が変わる！ハーブティーや免疫もちもちゆず茶サイダーなど、医学にまつわるメニューを用意しております。皆様のご来店を店員一同お待ちしております。" />
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
       padding 2px 0px;
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
          <h2 class="relative">カフェ企画 メニュー</h2>
        </section>
        <section class="">
          <h3 class="h2 mb1 goods-title">ハーブティー</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-6">
            <amp-carousel id="harbtea"
              width="400"
              height="300"
              layout="responsive"
              type="slides"
              on="slideChange:
                      harbteaSelector.toggle(index=event.index, value=true),
                      harbteaPreview.goToSlide(index=event.index)
              " lightbox>
              <amp-img src="/img/cafe/herbtea-purple.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/cafe/herbtea-pink.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
            </amp-carousel>
            <amp-selector id="harbteaSelector"
              on="select:harbtea.goToSlide(index=event.targetOption)"
              layout="container">
              <div id="harbteaPreview" class="carousel-preview mt1">
                <amp-img option="0"
                  selected
                  src="/img/cafe/herbtea-purple.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="1"
                  src="/img/cafe/herbtea-pink.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
              </div>
            </amp-selector>
            </div>
            <div class="md-px2 col-12 sm-col-8 md-col-6">
              <p>
                <span class="h4 block my1 goods-name">色が変わる！ハーブティー 300円</span>
                <span class="goods-explanation">
                「マロウブルー」と呼ばれる紫色のハーブティー。スポイトでレモンを滴下すると，なんとピンク色になります！最初は薄味のハーブティーとして，滴下後はレモン風味のドリンクとしてお楽しみいただけます。鮮やかな色で，身体に悪いのではないかと一見不安になるかもしれませんが，むしろ呼吸器や消化器の炎症を抑える身体にいい飲み物です。
                </span>
              </p>
            </div>
          </div>
        </section>

        <section class="">
          <h3 class="h2 mb1 goods-title">ゆず茶サイダー</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-6">
            <amp-carousel id="sider"
              width="400"
              height="300"
              layout="responsive"
              type="slides"
              lightbox>
              <amp-img src="/img/cafe/sider.jpg"
                width="602"
                height="875"
                layout="responsive"
                alt="a sample image"></amp-img>
            </amp-carousel>
            </div>
            <div class="md-px2 col-12 sm-col-8 md-col-6">
              <p>
                <span class="h4 block my1 goods-name">免疫もちもちゆず茶サイダー 350円</span>
                <span class="goods-explanation">
                私たちの血液を流れる血球細胞。これらをイメージした，フルーツポンチ風のドリンクを作りました。赤い白玉は赤血球，白い白玉は白血球，ゆずジュレは血小板をイメージしています。カラフルな見た目とさっぱり美味しい味を，免疫に思いを馳せながらお楽しみください。
                </span>
              </p>
            </div>
          </div>
        </section>

        <section class="">
          <h3 class="h2 mb1 goods-title">ケーキ</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-6">
            <amp-carousel id="cake"
              width="400"
              height="300"
              layout="responsive"
              type="slides"
              lightbox>
              <amp-img src="/img/cafe/cake2.jpg"
                width="602"
                height="875"
                layout="responsive"
                alt="a sample image"></amp-img>
            </amp-carousel>
            </div>
            <div class="md-px2 col-12 sm-col-8 md-col-6">
              <p>
                <span class="h4 block my1 goods-name">
                  ポルポローネ・ブラウニー・シフォンケーキ・シューケット  各250円
                </span>
                <span class="goods-explanation">
                  障がい者就労支援事業「ホープ就労支援センター渋谷」の中で運営されているカフェ&ベーカリー「渋谷まる福」様のお菓子です。素材にこだわった、やさしい味のスイーツたちは、どれも絶品です。
                </span>
              </p>
            </div>
          </div>
        </section>

        <section class="">
          <h3 class="h2 mb1 goods-title">クッキー</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-6">
            <amp-carousel id="cookie"
              width="400"
              height="300"
              layout="responsive"
              type="slides"
              lightbox>
              <amp-img src="/img/cafe/cookie.jpg"
                width="602"
                height="875"
                layout="responsive"
                alt="a sample image"></amp-img>
            </amp-carousel>
            </div>
            <div class="md-px2 col-12 sm-col-8 md-col-6">
              <p>
                <span class="h4 block my1 goods-name">吾輩は猫であるクッキー 250円</span>
                <span class="goods-explanation">
                  夏目漱石の有名な小説『吾輩は猫である』の主人公の黒猫をイメージしたクッキーです。障害福祉サービス事業所「ワークショップやまどり」が運営する「カフェテリア白い花」様のお菓子です。見た目の可愛らしさはもちろん，ココアの風味とサクサクとした食感も大変好評です。
                </span>
              </p>
            </div>
          </div>
        </section>


        <section class="">
          <h3 class="h2 mb1 goods-title">コーヒー・紅茶</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-6">
            <amp-carousel id="drink"
              width="400"
              height="300"
              layout="responsive"
              type="slides"
              on="slideChange:
                      drinkSelector.toggle(index=event.index, value=true),
                      drinkPreview.goToSlide(index=event.index)
              " lightbox>
              <amp-img src="/img/cafe/coffee.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
              <amp-img src="/img/cafe/tea.jpg"
                width="1282"
                height="1792"
                layout="responsive"
                alt="a sample image"></amp-img>
            </amp-carousel>
            <amp-selector id="drinkSelector"
              on="select:drink.goToSlide(index=event.targetOption)"
              layout="container">
              <div id="drinkPreview"
                class="carousel-preview mt1">
                <amp-img option="0"
                  selected
                  src="/img/cafe/coffee.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
                <amp-img option="1"
                  src="/img/cafe/tea.jpg"
                  width="40"
                  height="60"
                  alt="a sample image"></amp-img>
              </div>
            </amp-selector>
            </div>
            <div class="md-px2 col-12 sm-col-8 md-col-6">
              <p>
                <span class="h4 block my1 goods-name">コーヒー・紅茶 200円</span>
                <span class="goods-explanation">
                オーソドックスなドリンクを楽しみたい方のために，コーヒー・紅茶をご用意しております。
                </span>
              </p>
            </div>
          </div>
        </section>


        <section class="">
          <h3 class="h2 mb1 goods-title">ココア</h2>
          <div class="mb2 flex flex-wrap justify-around">
            <div class="col-12 sm-col-8 md-col-6">
            <amp-carousel id="cocoa"
              width="400"
              height="300"
              layout="responsive"
              type="slides"
              lightbox>
              <amp-img src="/img/cafe/cocoa.jpg"
                width="602"
                height="875"
                layout="responsive"
                alt="a sample image"></amp-img>
            </amp-carousel>
            </div>
            <div class="md-px2 col-12 sm-col-8 md-col-6">
              <p>
                <span class="h4 block my1 goods-name">ココア 250円</span>
                <span class="goods-explanation">
                  甘いドリンクを楽しみたい方のために，ココアを提供しております。チョコレートの香りと濃厚な味わいは，五月祭の合間のブレイクタイムにぴったりです！
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

