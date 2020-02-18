<?php
// On démarre la session AVANT d'écrire du code HTML
require_once('header.php');
require_once('model/dbconnect.php');

if($_SESSION['pseudo']==""){
  header('Location: connexion.php');
  }
?>
    <br></br>
<div class="container col s12 m12">
   <div class="card-action">
          <a href="create.php"><i class="material-icons left">add_box</i>Ajouter un article</a>
          </div>
  </div>
</div>
<br></br>
<div class="container col s12 m12">
<h5>Liste articles</h5>
    <table>
        <tr>
            <th class="col s4 m4">Titre</th>
            <th class="col s4 m4">Date de parution</th>
            <th class="col s4 m4">Option</th>
        </tr>
       
<?php 
$table ="billet";
// On affiche uniquement les 3 derniers articles
$donnees =$bdd->query('SELECT  * FROM billet');
while ($data =$donnees->fetch()){
  echo '<tr><td class="col s4 m4"><h6>' . $data['titre'].'</h6></td>
  <td class="col s4 m4"><p>'. $data['dateAjout'].'</p></td>
  <td class="col s4 m4"><a href="article.php?id='.$data['id'].'" >Lire article</a>'."/".'<a href="delete-article.php?id='.$data['id'].'" >Effacer</a>'.'/'.'<a href="create.php?edit='.$data['id'].'" >Editer</a></td></tr>';
  ;
}

  ?>
    </table>
 </div>
  <?php require_once('footer.php');
?>

</body>
</html>