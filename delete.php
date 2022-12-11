<?php
require_once("dbconnect.php");
$stmt = $db->prepare("DELETE FROM article WHERE id=:id");
$stmt->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
$stmt->execute();
header("location: index.php");
