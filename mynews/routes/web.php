<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
PHP/Laravel10
課題1→Routing
課題2→Routingをグループ化するメリットは、まとめて記載できる点
　　　コードベタ打ちでもしっかり書けば動作するだろうが、
　　　拡張性、再利用性、独立性を担保しながら複数人での開発を想定するなら
　　　グループ化はメリットがあると考えられる。
*/



Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

Route::get('XXX', 'AAAController@bbb');

Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
});




/*
メモ
 http://XXXXXX.jp/admin/をRoutingする場合、
 Route::group(['prefix' => 'admin'], function() {
     Route::get('news/create', 'Admin\NewsController@add');
 });
●Route::group→複数のRouting設定をグループ化する役割
●['prefix' => 'admin']→無名関数function(){}の中の設定のurlを http://XXXXXX.jp/　　　　　　　　　　　admin/にしている
●Route::get('news/create', 'Admin\NewsController@add')について
　・news/create→このケースではadmin以下のurl。これで、
　　　　　　　  http://XXXXXX.jp/admin/news/create/となる
　・NewsController→コントローラー名
　・@add→コントローラーのアクション
　・\Adminはディレクトリの位置か？

まとめると
Route::get('アクセス先','ディレクトリ\コントローラー名@アクション名');
*/
