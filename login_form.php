<?php
session_start();
if (isset($_SESSION['email'])) {
    // ログインしている場合は投稿一覧に遷移
    header("location: index.php");
}
?>

<h1>ログインページ</h1>
<form action="login.php" method="post">
    <div>
        <label>
            メールアドレス：
            <input type="text" name="email" required>
        </label>
    </div>
    <div>
        <label>
            パスワード：
            <input type="password" name="password" required>
        </label>
    </div>
    <input type="submit" value="ログイン">
</form>
<p>新規登録は<a href="signup.php">こちら</a></p>
