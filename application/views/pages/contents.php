<?=$prefix?>
  <title>おすすめ企画 | 東京大学 第92回 五月祭 医学部企画</title>
  <link rel="canonical" href="https://utmed-mayfes.net/map">
  <meta name="description" content="東京大学 第92回五月祭 医学部企画『医へのいざない』のおすすめ企画紹介ページです。2019年は第71回目で、今年もクイズ・ゲーム・学術展示等面白い企画を沢山ご用意しております。皆様のご来場をお待ちしております。"/>
  <meta property="og:title" content="おすすめ企画 | 東大医学部 五月祭企画 医へのいざない" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://utmed-mayfes.net/timetable" />
  <meta property="og:image" content="https://utmed-mayfes.net/img/header/header-og-1x-50-withtext.jpg" />
  <meta property="og:description" content="東京大学 第92回五月祭 医学部企画『医へのいざない』のおすすめ企画紹介ページです。" />
  <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
<?=$header?>
  amp-accordion{
    margin-left:25px;
  }
  .i-amphtml-accordion-header {
    cursor: pointer;
    background-color: transparent;
    padding-right: 20px;
    border:none;
    border-bottom:1px solid #dfdfdf;
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    
  }

  .header-img{
    margin:10px 0;
    width:50px;
    height:50px;
    border-radius:50%;
    overflow:hidden;
    float:left;
  }

  .header-name{
    line-height:70px;
    margin-left:60px;
  }
  .header-icon{
    float:right;
    line-height:70px;
    font-size:30px;
  }
  section[expanded] .header-icon::after{
    transform:rotate(-45deg);
  }

  .header-icon::after{
    content:'';
    width:10px;
    height:10px;
    border:none;
    border-top:solid 2px black;
    border-right:solid 2px black;
    transform: rotate(135deg);
    position:absolute;
    top:50%;
    right:20px;
  }

  section>p{
    box-shadow:none;
    padding:10px 10px 30px 10px;
  }
  
<?=$menu?>
<?=$navbar?>
<main id="content" role="main" class=""> 
  <article class="px2">
          <section class="">
              <h2 class="relative">おすすめ企画</h2>
              

              <amp-accordion disable-session-states>

                <!-- 講演会 -->
                <section>
                  <header>
                    <div class="header-img">
                      <amp-img src="/img/contents/experience/surgery.jpg" height="50" layout="fixed-height"></amp-img>
                    </div>
                    <div class="header-icon"></div>
                    <h2 class="header-name">講演会</h2>
                  </header>
                  <p>講演会のコンテンツの内容です。</p>
                </section>

                <!-- 2つ目のコンテンツ -->
                <section>
                  <header>
                    <div class="header-img">
                      <amp-img src="/img/contents/experience/surgery.jpg" height="50" layout="fixed-height"></amp-img>
                    </div>
                    <div class="header-icon"></div>
                    <h2 class="header-name">2つ目の企画</h2>
                  </header>
                  <p>2つ目の企画のコンテンツの内容です。</p>
                </section>

                </amp-accordion>


          </section>
      </article>
  <article class="px2">
    
  </article>
</main>
<?=$footer?>
