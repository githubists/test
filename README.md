# test
テスト用
## デザイン
Adobe Illustrator、Adobe XDでデザインカンプを作成する。Adobe XDの場合はユーザーインタラクションのテストもできる。
[Bootstrap](https://getbootstrap.com/)や[AMPStart](https://www.ampstart.com/)等のテンプレートを使用するのも有用である。

## テスト環境について
https://github.com/githubists/test/blob/master/01_HTML/gogatsusai_home.amp.html
にてトップページを作成
https://github.com/githubists/test/blob/master/01_HTML/article.amp.html
にて小企画紹介用のテンプレートを作成

本番環境では[CodeIgniter](https://codeigniter.com/)を利用すると考えられるが現状はページごとにhtmlファイルを作成している。

ニュースの内容を更新する際は/feed.xmlを、デザイン変更の場合、/01_HTML/js/main.jsを編集する。
.amp.htmlはコミット前に[AMP Validator](https://validator.ampproject.org/)で正当なAMPかチェックする

## デプロイ前の確認事項
- PhotoshopでJPGを生成する際には、プログレッシブを選択する
- 画像の解像度が大きすぎないか確認
- [Tiny PNG](https://tinypng.com/)等でデザインが崩れない範囲で.jpg、.pngファイルを最適化
- `alt=""`に正しく内容を設定しているか確認
- [Font Squirrel Webfont Generator](https://www.fontsquirrel.com/tools/webfont-generator)等によるフォントのサブセット化
- 監査ツールでの監査
    - [W3C Validator](https://validator.w3.org/)
    - [AMP テストツール](https://search.google.com/test/amp)
    - [モバイルフレンドリーテスト](https://search.google.com/test/mobile-friendly)
    - [構造化データテストツール](https://search.google.com/structured-data/testing-tool/u/0/)
    - [PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/)
    - [Lighthouse](https://chrome.google.com/webstore/detail/lighthouse/blipmdconlkpinefehnmjammfjpmpbjk)
- hrefにherokuappのアドレスがある場合utmed-mayfesに変換する
- HTML,CSS,JavascriptのMinify
    - [HTML Minifier](https://github.com/kangax/html-minifier)
    - [CSSNano](https://github.com/cssnano/cssnano),[csso](https://github.com/css/csso)
    - [UglifyJS](https://github.com/mishoo/UglifyJS2)
- [zopfli](https://github.com/google/zopfli)によるgzip圧縮
- title,descriptionはページごとに異なるか

## デプロイ後の確認事項
- AMP Cacheの更新
- feed.xmlの更新
- [Google Analytics](https://analytics.google.com/analytics/web/)によるトラッキングのチェック
- [Search Console](https://search.google.com/search-console)での状況確認

## デザインに悩んだら
デザインに悩んだ際はA/Bテストが有用である。[Google Optimize](https://optimize.google.com/optimize/home/)を使用する。AMPページの場合は[amp-experiment](https://www.ampproject.org/docs/reference/components/amp-experiment)を使用する。

# デプロイの仕方について
/home/g2019mayfesweb/app/current
がドキュメントルートになっています。

/home/g2019mayfesweb/app/current
はリンクになっていて、実際には/home/g2019mayfesweb/app/releases/v00x
を指しています。現在のリンク先は
```shell
$ ls -l /home/g2019mayfesweb/app/current
lrwxrwxrwx 1 g2019mayfesweb g2019mayfesweb 38 Apr  4 11:42 app/current -> /home/g2019mayfesweb/app/releases/v002
```
などとすれば調べられます。

デプロイするには、まずreleasesディレクトリの中にgithubの内容をcloneします。するとtestディレクトリができるのでそれをv00xという名前に変更します（わかりやすいために）。最後にリンクを貼り直してデプロイ完了です。
```shell
$ cd /home/g2019mayfesweb/app/releases
$ git clone https://github.com/githubists/test.git
$ mv test v00x
$ ln -snf v00x /home/g2019mayfesweb/app/current
```

## サーバー設定ファイルについて
サーバーの設定ファイルは
/home/g2019mayfesweb/server_conf/mayfes.conf
に移動しました。
gitで管理しているので、安心して変更できます。

# CodeIgniterについて
heroku上である程度作ることにしました。
https://gogatsusai.herokuapp.com/01_HTML
以外のURLにアクセスするとCodeIgniterに繋がります。
CodeIgniterでのURLと呼び出されるコントローラーの関係は以下のようになってます。
https://gogatsusai.herokuapp.com/[controller-class]/[controller-method]/[arguments]
ローカルで試したいときは
```shell
$ php -S localhost:3000 index.php
```
を実行して、ブラウザーで
http://localhost:3000/[controller-class]/[controller-method]/[arguments]
にアクセスすると試すことができます。
application/views/parts/template.phpに分割のデモがあります。

## パーツの説明
### 必須
| ファイル名 | 内容 |インクルードコード|
----|----|----
| [application/views/templates/prefix.php](https://github.com/githubists/test/blob/master/application/views/templates/prefix.php) | `<!doctype HTML>`から`<head>`まで |`<?=$prefix?>`|
| [application/views/templates/header.php](https://github.com/githubists/test/blob/master/application/views/templates/header.php) | 全ページに共通する`<meta>`、`<link>`タグとCSS |`<?=$header?>`|
| [application/views/templates/menu.php](https://github.com/githubists/test/blob/master/application/views/templates/menu.php) | `@font-face`、`</head`、`<body>`、GTMの設定、Service Workerのインストール、サイドバーの内容 |`<?=$menu?>`|
| [application/views/templates/navbar.php](https://github.com/githubists/test/blob/master/application/views/templates/navbar.php) | サイドバーの開閉用ヘッダー |`<?=$navbar?>`|
| [application/views/templates/footer.php](https://github.com/githubists/test/blob/master/application/views/templates/footer.php) | フッターとLightboxの中身、`</body>`、`</html>` |`<?=$footer?>`|
### オプション
| ファイル名 | 内容 |インクルードコード|
----|----|----
| [application/views/parts/comingsoon.php](https://github.com/githubists/test/blob/master/application/views/parts/comingsoon.php) | ComingSoonページの内容 `<main>`~`</main>` |`<?=$comingsoon?>`|
| [application/views/parts/sponsors.php](https://github.com/githubists/test/blob/master/application/views/parts/comingsoon.php) | 協賛企業様のバナー表示 `<section>`~`</section>` |`<?=$sponsors?>`|
| [application/views/parts/vote.php](https://github.com/githubists/test/blob/master/application/views/parts/comingsoon.php) | Mayfes Award投票バナー(未作成) |`<?=$vote?>`|
### 使用法([template.php](https://github.com/githubists/test/blob/master/application/views/pages/template.php)の解説)
```
<?=$prefix?>
  <title></title>
  <link rel="canonical" href="">
  <meta name="description" content=""/>
  <meta property="og:title" content="" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content="" />
```
上記のタグはページごとに変える。
また、ここにamp-lightboxとamp-sidebar以外のAMP Componentをインクルードする。
```
     <?=$header?>
```
ここは`<style>`~`</style>`の間であるからCSSのコードをそのまま打ち込む
```
    <?=$menu?>
```
メニューバーの上に置きたいものはここに書く。メニューバーは`position:sticky`で画面上部に貼りつくようになっている
```
    <?=$navbar?>
```
ここにはメインとなるコンテンツを置く`<?=$comingsoon?>`や`<?=$sponsors?>`、`<?=$vote?>`を置くのもここである。
```
    <button class="controls scrollToTop p0"on="tap:top.scrollTo(duration=200)"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><title>ScrollToTop</title><polyline stroke="#fff" fill="none" points="10 32 25 18 40 32"/></svg></button>
  <?=$footer?>
```
これ以降は何も書かない。

### カスタマイズ法
新たに部品を[application/views/templates](https://github.com/githubists/test/tree/master/application/views/templates)、[application/views/parts](https://github.com/githubists/test/tree/master/application/views/parts)に作成した場合は、
[application/controllers/Pages.php](https://github.com/githubists/test/blob/master/application/controllers/Pages.php)の`public function view($page='gogatsusai_home')`の`else{}`内でhoge.phpをファイル名とすると`$data['hoge']=$this->load->view('templates/hoge','',TRUE);`あるいは`$data['hoge']=$this->load->view('parts/hoge','',TRUE);`を付け加えれば`<?=$hoge?>`でインクルードできるようになる
