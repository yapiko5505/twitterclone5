<?php
// 設定関連を読み込む
include_once('../config.php');
// 便利な関数を読み込む
include_once('../util.php');

?>





<!DOCTYPE html>
<html lang="ja">
<head>
    
    <?php include_once('../views/common/head.php'); ?>
    <title>会員登録画面/twitterクローン</title>
    <meta name="description" content="会員登録画面です">
</head>

<body class="signup text-center">
    <main class="form-signup">
        <form action="sign-up.php" method="post">
            <img src="/twitterClone/views/img/logo-white.svg" alt="" class="logo-white">
            <h1>アカウントを作る</h1>
            <input type="text" class="form-control" name="nickname" placeholder="ニックネーム" maxlength="50" require autofocus>
            <input type="text" class="form-control" name="name" placeholder="ユーザー名、例)tech1s132" maxlength="50" require>
            <input type="email" class="form-control" name="email" placeholder="メールアドレス" maxlength="254" require>
            <input type="password" class="form-control" name="password" placeholder="パスワード" minlength="4" maxlength="128" require>
            <button class="w-100 btn btn-lg" type="submit">登録する</button>
            <p class="mt-3 mb-2"><a href="sign-in.php">ログインする</a></p>
            <p class="mt-2 mb-3 text-muted">&copy; 2021</p>


        </form>
    </main>
    <?php include_once('../views/common/foot.php'); ?>
</body>

</html>