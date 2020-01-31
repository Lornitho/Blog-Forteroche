<?php
$id=$_GET['id'];
$billet =$bdd->query("SELECT  * FROM billet WHERE id=$id");
$commentaires =$bdd->query("SELECT  * FROM commentaire WHERE idbillet=$id");
//editage
while ($data =$billet->fetch()){
    echo '<h4>' . $data['titre'].'</h4>'. $data['description'] .'<p>'. $data['dateAjout'].'<p>'.'<br>';
    if($_SESSION['pseudo']!=""){
        echo '<a href="create.php?edit='.$data['id'].'" >Editer</a></br>';
    }
    

}
include ('model/commentModel.php');
?>