<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        <div class="memo_area">
            @yield('content')
            <div class="memo_show">
                <div class="memo_item">
                    <div class="memo_title">
                        <time>2022.10.10</time>
                        <p>サッカー</p>
                    </div>

                    <div class="btn_area">
                        <div class="edit_form">
                            <x-button-form action="/edit" label="編集" class="btn-edit" />
                        </div>
                        <div class="del_area">
                            <x-button-form action="/delete" label="削除" class="btn-delete" />
                        </div>
                    </div>
                </div>
                <div class="memo_item">
                    <div class="memo_title">
                        <time>2022.10.10</time>
                        <p>大阪旅行</p>
                    </div>
                    <div class="btn_area">
                        <div class="edit_form">
                            <x-button-form action="/edit" label="編集" class="btn-edit" />
                        </div>
                        <div class="del_area">
                            <x-button-form action="/delete" label="削除" class="btn-delete" />
                        </div>
                    </div>
                </div>
                <div class="memo_item">
                    <div class="memo_title">
                        <time>2022.10.10</time>
                        <p>メモ内容</p>
                    </div>
                    <div class="btn_area">
                        <div class="edit_form">
                            <x-button-form action="/edit" label="編集" class="btn-edit" />
                        </div>
                        <div class="del_area">
                            <x-button-form action="/delete" label="削除" class="btn-delete" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>