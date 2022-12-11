<?php
const DSN = "mysql:dbname=kadaidb;host=localhost;charset=utf8";
const USER = "root";
const PASSWORD = "";
const OPTION = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
try {
    $db = new PDO(DSN, USER, PASSWORD, OPTION);
} catch (PDOException $e) {
    echo "DB接続エラー：" . $e->getMessage();
}
