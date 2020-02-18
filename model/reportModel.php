<?php
require_once('dbconnect.php');
$id=$_GET['id'];
$report_comment = $bdd->prepare("UPDATE commentaire SET flag = 1 WHERE id =$id");
    $report_comment->execute();

echo "succes";








