<?php
// On démarre la session AVANT d'écrire du code HTML
require_once('header.php');
require_once('model/dbconnect.php');

if($_SESSION['pseudo']==""){
  header('Location: connexion.php');
  }
?>


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
  echo '<tr><td class="col s4 m4"><h5>' . $data['titre'].'</h5></td>
  <td class="col s4 m4"><p>'. $data['dateAjout'].'</p></td>
  <td class="col s4 m4"><a href="article.php?id='.$data['id'].'" >Lire article</a>'."/".'<a href="delete-article.php?id='.$data['id'].'" >Effacer</a>'.'/'.'<a href="create.php?edit='.$data['id'].'" >Editer</a></td></tr>';
  ;
}

  ?></tr>
    </table>
    <h5>Liste utilisateurs</h5>
    <table class="col s12 m12">
        <tr>
            <th class="col s4 m4">Pseudo</th>
            <th class="col s4 m4">Mail</th>
            <th class="col s4 m4">Option</th>

        </tr>

<?php 
$table ="utilisateur";
// On affiche uniquement les 3 derniers articles
$donnees =$bdd->query('SELECT  * FROM utilisateur');
while ($data =$donnees->fetch()){
  echo '<tr><td class="col s4 m4"<p>' . $data['usename'].'</p></td>'
  .'<td class="col s4 m4"><p>'. $data['mail'].'</p></td>'
  .'<td class="col s4 m4" ><a href="delete.php?id='.$data['id'].'" >Effacer</a></td></tr>';
  
}

  ?>
 </table>
    <h5>Liste des commentaire</h5>
    <table class="col s16 m16">
        <tr>
            <th class ="col s4 m4">Pseudo</th>
            <th class ="col s4 m4">date</th>
            <th class ="col s4 m4">commentaire</th>
            <th class ="col s4 m4">Option</th>

        </tr>
<?php 
$table ="commentaire";
// On affiche uniquement les 3 derniers articles
$donnees =$bdd->query('SELECT  * FROM commentaire');
while ($data =$donnees->fetch()){
  echo '<tr><td class="col s4 m4"><p>' . $data['username'].'</p></td>'
  .'<td class="col s4 m4"><p>'. $data['datecomment'].'</p></td>'
  .'<td class="col s4 m4"><p>'. $data['text'].'</p></td>'
  .'<td ><a href="delete-comment.php?id='.$data['id'].'" >Effacer</a></td></tr>';

}

  ?>
    </table>
    <h5>Liste des signalements</h5>
    <table class="col s12 m12">
        <tr>
            <th col s4 m4>Pseudo</th>
            <th col s4 m4>Mail</th>
            <th col s4 m4>Option</th>

        </tr>
        <tr>
        <tr class="col s12 m12">
<?php 
$table ="report";
// On affiche uniquement les 3 derniers articles
$donnees =$bdd->query('SELECT  * FROM report');
while ($data =$donnees->fetch()){
  echo '<tr><td class="col s4 m4"><p>' . $data['userreport'].'</p></td>'
  .'<td class="col s4 m4"><p>'. $data['commentid'].'</p></td>'
  .'<td class="col s4 m4"><a href="delete.php?id='.$data['id'].'" >Effacer</a></td></tr>';
  
}

  ?>
    </table>
</div>