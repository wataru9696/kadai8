<?php
session_start();
if (isset($_SESSION['email'])) {
    // ログインしている場合は投稿一覧に遷移
    header("location: index.php");
}
?>

<h1>新規会員登録</h1>
<form action="register.php" method="post">
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
    <input type="submit" value="新規登録">
</form>
<p>すでに登録済みの方は<a href="login_form.php">こちら</a></p>
