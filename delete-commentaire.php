<?php
$id=$_GET['id'];


$query = $pdo->prepare("DELETE FROM commentaire WHERE id = $id");
$query->execute(['id' => $id]);

header('Location: admin.php');
exit();
?>