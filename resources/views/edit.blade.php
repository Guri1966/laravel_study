    @extends('layout')
    @section('title','編集')
    @section('content')
    <div class="memo_form">
        <h2>メモを編集</h2>
        <form>
            @csrf
            <input class="memo_text" type="text" name="edit_memo" value="">
            <input type="submit" value="追加">
        </form>
    </div>
    @endsection