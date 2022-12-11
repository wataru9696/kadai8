<?php
require_once("dbconnect.php");

session_start();
if (!isset($_SESSION['email'])) {
    // ログインしていない場合はログインフォームに遷移
    header("location: login_form.php");
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規投稿</title>
</head>

<body>
    <h1>新規投稿</h1>
    <form action="insert.php" method="post">
        <p>タイトル</p>
        <input type="text" name="title">
        <p>説明</p>
        <textarea name="description" cols="30" rows="10"></textarea>
        <input type="submit" value="送信">
    </form>
</body>

</html>
