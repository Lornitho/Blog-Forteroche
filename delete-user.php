<?php

$id=$_GET['id'];
$query1= $bdd->prepare("DELETE FROM utilisateur WHERE id = $id");
$query1->execute(['id' => $id]);
header('Location: admin-user.php');

?>