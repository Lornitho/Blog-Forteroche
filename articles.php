
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
  echo '<h2>' . $data['titre'].'</h2>'. $data['description'] .'<p>'. $data['dateAjout'].'<p>';
  $comments =$bdd->query('SELECT  * FROM commentaire WHERE idbillet='.$data['id']);
  while($comment =$comments->fetch()){
    echo '<p>'. $comment['username']. '-' . $comment['datecomment'].'<p>'.'<p>' .  $comment['text'] .'</p>';
  }
  include ('commentaire.php');
}
?>
</body>
</html>