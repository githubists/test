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
