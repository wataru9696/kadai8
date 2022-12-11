<?php
require_once("dbconnect.php");
$stmt = $db->prepare("INSERT INTO article SET title=:title, description=:description");
$stmt->execute(array(":title" => $_POST["title"], ":description" => $_POST["description"]));
header("location: index.php");
