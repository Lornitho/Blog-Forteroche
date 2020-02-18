
<?php
// On démarre la session AVANT d'écrire du code HTML
require_once('header.php');
require_once('model/dbconnect.php');

if($_SESSION['pseudo']==""){
  header('Location: connexion.php');
  }
?>

<div class="container col s12 m12">

<h5>Liste utilisateurs</h5>
    <table class="col s12 m12">
        <tr>
            <th class="col s4 m4">Pseudo</th>
            <th class="col s4 m4">Mail</th>
           

        </tr>

<?php 
$table ="utilisateur";
// On affiche uniquement les 3 derniers articles
$donnees =$bdd->query('SELECT  * FROM utilisateur');
while ($data =$donnees->fetch()){
  echo '<tr><td class="col s6 m6"<p>' . $data['usename'].'</p></td>'
  .'<td class="col s6 m6"><p>'. $data['mail'].'</p></td>'
  .'</tr>';
  
}

  ?>
 </table>
 </div>