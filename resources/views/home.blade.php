@extends('layout')
@section('title','メモ帳')
@section('content')
<div class="memo_form">
    <h2>メモを追加</h2>
    <form action="{{ asset('/add') }}" method="post">
        @csrf
        <input class="memo_text" type="text" name="memo_text" id="memo_text">
        <input type="submit" value="追加">
    </form>
</div>

@endsection