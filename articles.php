

<?php
require_once('header.php');
require_once('model/dbconnect.php');
?>


<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m12">
<?php
$donnees =$bdd->query('SELECT  * FROM billet');
while ($data =$donnees->fetch()){
  echo '<h4>' . $data['titre'].'</h2>'
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