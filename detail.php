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
    <title>投稿詳細</title>
</head>

<body>
    <h1>投稿詳細</h1>
    <?php
    $stmt = $db->prepare("SELECT id, title, description FROM article WHERE id=:id");
    $stmt->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $stmt->execute();
    $article = $stmt->fetch();
    if ($article == null) {
        header("location: index.php");
    }
    ?>
    <dl>
        <dt>タイトル</dt>
        <dd><?php echo $article["title"]; ?></dd>
        <dt>説明</dt>
        <dd><?php echo $article["description"]; ?></dd>
    </dl>
    <a href="delete.php?id=<?php echo $article["id"]; ?>">削除</a>
</body>

</html>
