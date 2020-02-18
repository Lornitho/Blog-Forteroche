
<?php
// On démarre la session AVANT d'écrire du code HTML
require_once('header.php');
require_once('model/dbconnect.php');

if($_SESSION['pseudo']==""){
  header('Location: connexion.php');
  }
?>

<div class="container col s12 m12">
    <h5>Liste des signalements</h5>
    <table class="col s12 m12">
        <tr>
            <th col s4 m4>Pseudo</th>
            <th col s4 m4>Message</th>
            <th col s4 m4>Option</th>

        </tr>
        <tr>
        <tr class="col s12 m12">
<?php 
$table ="report";
// On affiche uniquement les 3 derniers articles
$donnees =$bdd->query("SELECT  * FROM commentaire WHERE flag = 1");
while ($data =$donnees->fetch()){
  echo '<tr><td class="col s4 m4"><p>' . $data['username'].'</p></td>'
  .'<td class="col s4 m4"><p>'. $data['text'].'</p></td>'
  .'<td class="col s4 m4"><a href="delete-comment.php?id='.$data['id'].'" >Effacer</a></td></tr>';
  
}

  ?>
    </table>
</div>