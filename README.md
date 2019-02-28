# test
テスト用
## テスト環境について
https://github.com/githubists/test/blob/master/01_HTML/gogatsusai_home.html
にてトップページを作成
https://github.com/githubists/test/blob/master/01_HTML/article.amp.html
にて小企画紹介用のテンプレートを作成

本番環境ではCodeIgniterを利用すると考えられるが現状はページごとにhtmlファイルを作成している。

ニュースの内容を更新する際は/feed.xmlを、デザイン変更の場合、/01_HTML/js/main.jsを編集する。

## デプロイ前の確認事項
- PhotoshopでJPGを生成する際には、プログレッシブを選択する
- 画像の解像度は大きすぎないか確認
- [W3C Validator](https://validator.w3.org/)、[PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/)、[Lighthouse](https://chrome.google.com/webstore/detail/lighthouse/blipmdconlkpinefehnmjammfjpmpbjk)での監査
- hrefにherokuappのアドレスがある場合utmed-mayfesに変換する
- カスタムCSS,JavascriptのMinify、[zopfli](https://github.com/google/zopfli)によるgzip圧縮
- title,descriptionはページごとに異なるか

# デプロイ後の確認事項
- AMP Cacheの更新
- feed.xmlの更新
- [Search Console](https://search.google.com/search-console)での状況確認
