<?php
require_once("dbconnect.php");

$email = $_POST["email"];
$password = $_POST["password"];

$user_count_stmt = $db->prepare("SELECT count(*) FROM user WHERE email=:email");
$user_count_stmt->execute(array(":email" => $email));
$user_count = $user_count_stmt->fetchColumn();

if ($user_count == 0) {
    $stmt = $db->prepare("INSERT INTO user SET email=:email, password=:password");
    $stmt->execute(array(":email" => $email, ":password" => $password));
    header("location: login_form.php");
}
?>

<p>入力されたメールアドレスはすでに登録済です。</p>
<a href="signup.php">戻る</a>
