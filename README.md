# Laravel_todos
シンプルタイプのdocker-compose.yml(webサーバーなし）


## 学習できたこと

・docker-composeによるPHP, MySQLの環境構築（Webサーバーなし）

・create-projectの方法

・テーブル作成、マイグレーション、ルーティング・モデル・コントローラ・ビューの作成およびディレクトリ構造の把握

・コントローラでの処理の書き方とCRUDのRailsとの命名の違い（newはcreate, createはstoreなど）

## 範囲外だったことや疑問点

・サーバーログはどこで見る？ターミナルに出力されない。```storage/laravel.log```にあったが、リアルタイムではない。

・```docker logs -f コンテナ名```でログを確認できる...はずだが、期待するものは見ることができなかった。

・Laravelにおけるバリデーションはどこに書く？

・処理失敗時のハンドリング（Railsでいうrender)はどのように書く？

・テーブルのリレーション、モデルの関連付けもきっとあるはず。どう書くのだろう？

・rails consoleのような対話形式も欲しい。Laravelでもある？

・binding.irbのようなデバッグも欲しい。知りたい。

・コントローラで```$todo = Todo::find($id)```の処理はフィルタのように共通化できるのかな？

・コントローラでのアクションは```public function```とスコープを明示的に書くのがRailsとの違い。privateメソッドやprotectedなどは、どんな場面で使うのか？

これらを１つずつ明らかにするための教材を、ネットで探す→なければ書籍

また、RUNTEQ生が作成した就活課題のアプリなどのコードを読んでみることにする。

<br>

6/16追記

上記の疑問を調べる形で、Notionにまとめた。

[Laravel学習が必要になった方へ【Railsと比較したメモです】 Notionまとめ](https://chief-era-2fd.notion.site/Laravel-Rails-f6b0aa73dcc54fba977f1092dd3c4817?pvs=4)


<br>

### 完成形👇


![image](https://github.com/Toshiki003/Laravel_todos/assets/110599239/1d4593eb-b74c-4dac-a7ff-aaf9e8ee0529)





参考： [Laravel&Bootstrapで作るTodoアプリケーション開発(入門編)](https://zenn.dev/ponta/books/164bb277874f1e607f97)
