<?php
require_once('model/dbconnect.php');

$id = $_GET['id'];
$query1= $bdd->prepare("DELETE FROM commentaire WHERE idbillet = $id");
$query1->execute(['id' => $id]);
$query = $bdd->prepare("DELETE FROM billet WHERE id = $id");
$query->execute(['id' => $id]);
header('Location: admin.php');
?>