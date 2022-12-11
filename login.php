<?php
require_once("dbconnect.php");

session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$stmt = $db->prepare("SELECT password FROM user WHERE email=:email");
$stmt->execute(array(":email" => $email));
$db_password = $stmt->fetch()["password"];

if ($password == $db_password) {
    $_SESSION['email'] = $email;
    header("location: index.php");
}
?>

<p>メールアドレスもしくはパスワードが間違っています。</p>
<a href="login_form.php">戻る</a>
