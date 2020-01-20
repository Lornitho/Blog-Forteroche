<?php
require_once('header.php');
require_once('model/dbconnect.php');
if(isset($_SESSION['id'])){

}
echo "Bienvenu".$pseudo."!";
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Blog Jean Forteroche</title>
<link rel ="icon" type="image/jpg" href ="writter.jpg"/>
<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<a href ="deconnexion.php"> Se deconnecter </a>

</body>
</html>