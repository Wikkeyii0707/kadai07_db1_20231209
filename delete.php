<?php
require_once 'funcs.php';

$pdo = connectDB();

$sql = 'DELETE FROM gs_kadai_image WHERE image_id = :image_id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':image_id', (int)$_GET['id'], PDO::PARAM_INT);
$stmt->execute();

header('Location:list.php');
exit();
?>