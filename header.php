<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Blog Jean Forteroche</title>
	<link rel ="icon" type="image/jpg" href ="img/writter.jpg"/>
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>tinymce.init({selector:'textarea'});</script>
	</head>
<body>
<nav class="white" role="navigation">
		<div class="nav-wrapper container">
			<a id="logo-container" href="#" class="brand-logo"><img src="img/writter.jpg" alt="writter logo"></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="index.php"><i class="material-icons left">home</i>Accueil</a></li>
				<li><a href="formulaire.php"><i class="material-icons left">contacts</i>Inscription</a></li>
				<li><a href="articles.php"><i class="material-icons left">list</i>Liste des billets</a></li>
				<?php if($_SESSION['pseudo']==""){?>
				<li><a href="connexion.php"><i class="material-icons left">cast_connected</i>Connexion</a></li>
				<?php }else{ ?>
				<li><a href="model/deconnexionModel.php"><i class="material-icons left">cast_connected</i>Deconnexion</a></li>
				<?php } ?>
			</ul>
			
			<ul id="nav-mobile" class="sidenav">
				<li><a href="#">Navbar Link</a></li>
			</ul>
			<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		</div>
</nav>

