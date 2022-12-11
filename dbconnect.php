<?php
const DSN = "mysql:dbname=heroku_2f3a7fc8d3e989b;host=us-cdbr-east-06.cleardb.net;charset=utf8";
const USER = "bb169c14db8b8d";
const PASSWORD = "e1b2ef4f";
const OPTION = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
try {
    $db = new PDO(DSN, USER, PASSWORD, OPTION);
} catch (PDOException $e) {
    echo "DB接続エラー：" . $e->getMessage();
}
