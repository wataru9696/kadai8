<?php
session_start();
// セッションの中身をすべて削除
$_SESSION = array();
// セッションを破棄
session_destroy();
header("location: login_form.php");
