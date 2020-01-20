<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
require_once('header.php');
require_once('model/dbconnect.php');


// On affiche uniquement les 3 derniers articles
$donnees =$bdd->query('SELECT  * FROM billet ORDER BY id DESC LIMIT 3 ');
//Affichage titre selement 400 charactere du text couper avec un lien sur les articles + dateAjout
while ($data =$donnees->fetch()){
  echo '<h2>' . $data['titre'].'</h2>'
  . substr($data['description'],0,400)
  .'<br><a href="article.php?id='.$data['id'].'" >Lire la suite</a></br>'
  .'<p>'. $data['dateAjout'].'<p>';
}


?>
</body>
</html>
