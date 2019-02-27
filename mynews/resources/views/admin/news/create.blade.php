{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ニュース新規作成</h2>
            </div>
        </div>
    </div>
@endsection


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
