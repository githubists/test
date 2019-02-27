# test
テスト用
https://github.com/githubists/test/blob/master/01_HTML/gogatsusai_home.html
にてテンプレートを作成している。
本番環境ではCodeIgniterを利用すると考えられるが現状はページごとにhtmlファイルを作成している。

ニュースの内容を更新する際は/feed.xmlと/01_HTML/js/main.jsを編集する。

デプロイ前の確認事項
W3C Validator、Lighthouseでの監査
hrefにherokuappのアドレスがある場合utmed-mayfesに変換する
カスタムCSS,JavascriptのMinify、zopfliによるgzip圧縮
title,descriptionはページごとに異なるか
