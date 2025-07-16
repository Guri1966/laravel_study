@extends('layout')
@section('title','メモ帳')
@section('content')
<div class="memo_form">
    <h2>メモを追加</h2>
    <form action="{{url('/add')}}" method="post">
        @csrf
        <input class="memo_text" type="text" name="memo_text" id="memo_text">
        <input type="submit" value="追加">
    </form>
    <div class="search_area" style="margin-top: 50px">
        <h2>検索</h2>
        <form action="{{url('/find')}}" method="post">
            <input class="memo_text" type="text" name="search_word" id="search_word">
            <input type="submit" value="検索">
        </form>
    </div>
</div>
@endsection