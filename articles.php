

<?php
require_once('header.php');
require_once('model/dbconnect.php');
?>


<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m12">
      <!-- affichage de tout les articles par ordre chronologique -->
<?php
$donnees =$bdd->query('SELECT  * FROM billet ORDER BY dateAjout DESC');?>
<div class="container">
  <div class="section">
    <div class="row">
      <?php while ($data =$donnees->fetch()){ ?>
      <div class="col s12 m12">
        <div class="card">
          <div class="card-image col m6">
            <img src="https://www.edilivre.com/media/blog/2014/09/auteur-ecrivain.jpg">
            <span class="card-title black-text text-align center"><h5><b><?=$data['titre'] ?></b></h5></span>
          </div>
          <div class="card-content text-align center">
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

           
  </div>
    </div>
    </div>
    </div>

          <?php require_once('footer.php');
?>
</body>
</html>