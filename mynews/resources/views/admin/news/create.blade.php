<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyNews</title>
    </head>
    <body>
        <h1>Myニュース作成画面</h1>
    </body>
</html>




<!--
PHP/Laravel11課題
1、Viewは何をするところ？
　コントローラーの指示によってアクセスしてきたユーザーのブラウザに
　表示物を生成するところである。

2、プログラマーがhtmlを書かずにPHPなどのプログラミング言語やフレームワークを
　　使う必要があるのはなぜ？
　→htmlだけだと決まったものしか表示できない。それでは足りないケースもある。
　　データの処理を定義し。ユーザーに適切な情報を表示するのにPHPなどの言語や
　　フレームワークが必要になるからである。

3、resources/views/admin/profileディレクトリ
!-->

<!--
メモ
public function add()
  {
      return view('admin.news.create');
  }
上記はコントローラーに定義されているAction。
　●view()→表示物の提示の関数か？
　●admin.news→resources/views/admin/newsディレクトリを表している
   ●create→上記ディレクトリ配下のcreate.blade.htmlファイルのこと
-->
