<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>メモ帳</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="memo_area">
            <div class="memo_form">
                <h2>メモを追加</h2>
                <form action="">
                    <input class="memo_text" type="text" name="" id="">
                    <input type="submit" value="追加">
                </form>
            </div>
            <div class="memo_show">
                <div class="memo_item">
                    <div class="memo_title">
                        <time>2022.10.10</time>
                        <p>サッカー</p>
                    </div>
                    <div class="btn_area">
                        <div class="edit_form">
                            <form action="">
                                <input type="submit" value="編集">
                            </form>
                        </div>
                        <div class="del_area">
                            <form action="">
                                <input type="submit" value="削除">
                            </form>
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
                            <form action="">
                                <input type="submit" value="編集">
                            </form>
                        </div>
                        <div class="del_area">
                            <form action="">
                                <input type="submit" value="削除">
                            </form>
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
                            <form action="">
                                <input type="submit" value="編集">
                            </form>
                        </div>
                        <div class="del_area">
                            <form action="">
                                <input type="submit" value="削除">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>