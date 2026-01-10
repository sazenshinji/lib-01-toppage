<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestPage</title>
</head>

<body>
    <div class="topp__content">
        <h1>「/test」にアクセスした時に表示される。</h1>

        <p>コントローラー：TestController</p>
        <p>アクション：index</p>
        <p>ブレードファイル：test_page.blade.php</p>

    </div>
</body>

</html>