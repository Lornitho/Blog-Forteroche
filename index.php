<?php
// On démarre la session AVANT d'écrire du code HTML
require_once('header.php');
require_once('model/dbconnect.php');
?>
  
<div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <br><br>
          <h1 class="header center teal-text text-lighten-2">Accueil</h1>
          <div class="row center">
            <h5 class="header col s12 light">
            <?php if(!empty($_SESSION['pseudo'])){
            echo "Bonjour ".$_SESSION['pseudo']."!";
            }
            else{ echo "Bienvenue sur le blog Jean Forteroche, acteur et écrivain.";
            }
            ?>
            </h5>           
          </div>
          <div class="parallax"><img src="img/background2.jpg" alt="Unsplashed background img 1"></div>
        </div>
      </div>
    </div>
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m12">
           
            
<?php 

// On affiche uniquement les 3 derniers articles
$donnees =$bdd->query('SELECT  * FROM billet ORDER BY id DESC LIMIT 3 ');
//Affichage titre selement 400 charactere du text couper avec un lien sur les articles + dateAjout
while ($data =$donnees->fetch()){
  echo '<h3>' . $data['titre'].'</h2>'
  . substr($data['description'],0,400)
  .'<br><a href="article.php?id='.$data['id'].'" >Lire la suite</a></br>'
  .'<p>'. $data['dateAjout'].'<p>';
}

  ?>
        </div>
      </div>
    </div>
  </div>
<?php require_once('footer.php');
?>

</body>
</html>
