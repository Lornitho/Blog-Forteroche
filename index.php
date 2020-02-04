<?php
// On démarre la session AVANT d'écrire du code HTML
require_once('header.php');
require_once('model/dbconnect.php');
$donnees =$bdd->query('SELECT  * FROM billet ORDER BY id DESC LIMIT 3 ');
?>
  
<div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <br><br>
          <h1 class="header center teal-text text-lighten-2">Accueil</h1>
          <div class="row center">
            <h5 class="header col s12 light">
            <?php if(!empty($_SESSION['pseudo'])){
            echo "Bonjour ".$_SESSION['pseudo']." !";
            echo '<br><a href="admin.php" >Si vous voulez modifier le contenu du blog</a></br>';
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
      <?php while ($data =$donnees->fetch()){ ?>
      <div class="col s12 m12">
        <div class="card">
          <div class="card-image">
            <img src="https://www.edilivre.com/media/blog/2014/09/auteur-ecrivain.jpg">
            <span class="card-title"><?=$data['titre'] ?></span>
          </div>
          <div class="card-content">
            <?=substr($data['description'],0,400) ?>
            <?= $data['dateAjout'] ?>
          </div>
          <div class="card-action">
            <a href="article.php?id=<?=$data['id'] ?>">Lire la suite</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<?php require_once('footer.php');
?>

</body>
</html>
