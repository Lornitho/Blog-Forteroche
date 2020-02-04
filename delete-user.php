<?php

$id=$_GET['id'];

$query = $pdo->prepare("DELETE FROM utilisateur WHERE id = $id");
$query->execute(['id' => $id]);

header('Location: admin.php');
exit();
?>