<!-- @extends('layout')
@section('title','メモ帳')-->

<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>メモ帳</title>
</head>
<!-- @section('content') -->

<body>

    <div class="container">
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
                    @csrf
                    <input class="memo_text" type="text" name="search_word" id="search_word">
                    <input type="submit" value="検索">
                </form>
            </div>
        </div>
        <div class="memo_area">
            <!-- <?php dd($memo_info); ?> // 追加 -->
            <!-- @yield('content') -->
            <div class="memo_show">
                <!-- @if (isset($memo_info) && $memo_info->isNotEmpty()) -->
                @foreach($memo_info as $memo)
                <div class="memo_item">
                    <div class="memo_title">
                        <time>{{ $memo->created_at }}</time>
                        <p>{{ $memo->content }}</p>
                    </div>
                    <div class="btn_area">
                        <div class="edit_form">
                            <form action="{{ url('/edit/'.$memo->id) }}" method="get">
                                @csrf
                                <input type="submit" value="編集">
                            </form>
                        </div>

                        <div class="del_area">
                            <form action="{{ url('/delete') }}" method="post">
                                <input type="hidden" name="delete_id" value="{{ $memo->id }}">
                                @csrf
                                <input type="submit" value="削除">
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
                @endisset
            </div>
        </div>
    </div>
</body>
<!-- @endsection -->

</html>