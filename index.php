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
    <title>投稿一覧</title>
</head>

<body>
    <a href="logout.php">ログアウト</a>

    <h1>投稿一覧</h1>

    <form action="index.php" method="get">
        <input type="text" name="searchWord">
        <input type="submit" value="検索">
    </form>

    <ul>
        <?php
        $searchWord = isset($_GET["searchWord"]) ? $_GET["searchWord"] : "";
        $articles = $db->prepare("SELECT DISTINCT id, title FROM article WHERE title LIKE :searchWord OR description LIKE :searchWord ORDER BY id ASC");
        $articles->execute(array(":searchWord" => "%" . $searchWord .  "%"));
        foreach ($articles as $article) : ?>
            <li>
                <a href="detail.php?id=<?php echo $article['id']; ?>"><?php echo $article["title"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="new.php">新規投稿</a>
</body>

</html>
