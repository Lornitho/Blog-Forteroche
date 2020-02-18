<?php
require_once('model/dbconnect.php');
$id = $_GET['id'];
$query = $bdd->prepare("DELETE FROM commentaire WHERE id = $id");
$query->execute(['id' => $id]);
header('Location: admin-report.php');
?>