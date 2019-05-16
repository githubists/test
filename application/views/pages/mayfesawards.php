<?=$prefix?>
  <title>館内案内 | 東京大学 第92回 五月祭 医学部企画</title>
  <link rel="canonical" href="https://utmed-mayfes.net/map">
  <meta name="description" content="東京大学 第92回五月祭 医学部企画『医へのいざない』の公式ウェブサイトです。2019年は第71回目で、今年もクイズ・ゲーム・学術展示等面白い企画を沢山ご用意しております。皆様のご来場をお待ちしております。"/>
  <meta property="og:title" content="館内案内 | 東大医学部 五月祭企画 医へのいざない" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://utmed-mayfes.net/mayfesaward" />
  <meta property="og:image" content="https://utmed-mayfes.net/img/header/header-og-1x-50-withtext.jpg" />
  <meta property="og:description" content="東京大学 第92回五月祭 医学部企画『医へのいざない』の「May Fes. Awards」投票用ページです。" />
<?=$header?>
.header {
  font-size: 2.5em;
  line-height: 1em;
  margin: -2.5rem 0 1.5em;
  padding-top: 4rem;
  text-shadow: 5px 5px 5px rgba(0,0,0,0.2);
  display: block;
  font-weight: bold;
}
.header::before {
    content: '';
    position: absolute;
    height: 45%;
    width: 100vw;
    left: 50px;
    top: 85px;
    background: linear-gradient(150deg,rgb(104, 207, 255), rgb(50,100,255));
    z-index: -1;
}
.box1 {
    font-size: 1rem;
    line-height: 2rem;
    margin-left: 1%;
    margin-right: 1%;
    box-shadow: 4px 4px 8px silver;
    background: white;
}
button.vote-link{
  display:inline;
  width:auto;
  text-decoration:underline;
}
button.vote-link:hover{
  transition: all 1s;
  color: #ffaa22;
}
#project-id{
  font-size:2rem;

}
#mobile, #office{
  padding-top:60px;
  margin-top:-60px;
}

<?=$menu?>
<?=$navbar?>
<main id="content" role="main" class="">
  <article class="px2">
    <h2 class="relative header">May Fes. Awards</h2>
    <section>
      <p class="p2 box1">
        当企画は「May Fes. Awards」での入賞を目指しております。こちらの
        <button class="vote-link"on="tap:mobile.scrollTo(duration=200)">＜スマホで投票＞</button>
        あるいは
        <button class="vote-link"on="tap:office.scrollTo(duration=200)">＜案内所にて投票＞</button>
        の手順に従い、当企画への投票を行っていただければ幸いです。ご協力よろしくお願いいたします。投票期間は
        <br>・18日(土) 10:00 ~ 18:00
        <br>・19日(日) 10:00 ~ 15:45
        <br>です。1日1回、3企画までご投票いただけます。案内所は大変混雑することが予想されます。スマホ投票でしたらスムーズに投票することができます。
        <br>
        <br>
        <span id="project-id"><small>企画ID: </small><strong>565</strong></span>
      </p>
    </section>
    <section id="mobile">
      <h3>スマホで投票</h3>
    </section>
    <section id="office">
      <h3>案内所にて投票</h3>
    </section>
  </article>
</main>
<?=$footer?>
