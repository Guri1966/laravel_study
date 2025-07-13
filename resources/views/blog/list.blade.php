<!--
1 共通テンプレlayout.blade.phpを作る
2 共通ヘッダーを作る
3　共通フッターを作る
4　共通テンプレを継承したリストを作る
-->
@extends('blog.layouts')
@section('title','ブログ一覧')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ブログ記事一覧</h2>
        <table class="table table-striped">
            <tr>
                <th>記事番号</th>
                <th>日付</th>
                <th>タイトル</th>
                <th></th>
            </tr>
            @foreach($blogs as $blog)
            <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->updated}}</td>
                <td>{{$blog->title}}</td>
                <td>{{$blog->content}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
@include('blog.footer')