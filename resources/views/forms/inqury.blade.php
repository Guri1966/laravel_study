<!-- コンポーネントを使用するビュー -->
<!-- resources/views/form.blade.php -->

<h1>お問い合わせフォーム</h1>

<form method="POST" action="/submit">
    @csrf

    <input type="text" name="name" placeholder="お名前"><br>

    <x-button class="bg-blue-500 text-white" type="submit">
        送信
    </x-button>
</form>