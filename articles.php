
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
<?php
require_once('header.php');
require_once('model/dbconnect.php');




$donnees =$bdd->query('SELECT  * FROM billet');
while ($data =$donnees->fetch()){
  echo '<h2>' . $data['titre'].'</h2>'
  . substr($data['description'],0,400)
  .'<br><a href="article.php?id='.$data['id'].'" >Lire la suite</a></br>'
  .'<p>'. $data['dateAjout'].'<p>';
}
?>
</body>
</html>