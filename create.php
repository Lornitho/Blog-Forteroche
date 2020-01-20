<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Jean';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 24;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Blog Jean Forteroche</title>
<link rel ="icon" type="image/jpg" href ="writter.jpg"/>
<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
<?php
require_once('header.php');
require_once('model/dbconnect.php');
$mode_edition = 0;
if(isset($_GET['edit']) AND !empty($_GET['edit'])) {
  $mode_edition = 1;
  $edit_id = htmlspecialchars($_GET['edit']);
  $edit_article = $bdd->prepare('SELECT * FROM billet WHERE id = ?');
  $edit_article->execute(array($edit_id));
  if($edit_article->rowCount() == 1){
    $edit_article = $edit_article->fetch();
  }
  else{
    die("Erreur : l'article n'existe pas !");
  } 
}
if (isset($_POST['titre'])&& isset($_POST['description'])){
  $titre=$_POST['titre'];
  $description=$_POST['description'];
  if($mode_edition == 0){
    $req = $bdd->prepare('INSERT INTO billet(titre, description, idUser, dateAjout) VALUES(:titre, :description, :idUser, NOW())');
    $req->execute(array(
      'titre' => $titre,
      'description' => $description,
      'idUser' => 1
    ));
    header('Location: index.php');
  } else {
    $id=(int)htmlspecialchars($_GET['edit']);
    $update = $bdd->prepare("UPDATE billet SET titre = ?, description = ? WHERE id =$id");
    $update->execute(array($titre, $description));
    header('Location: index.php');
  }
} 
?>
    <form class="col s12" method="POST">
      <div class="row">
        <div class="input-field col s6">
          <label for="first_name">Titre</label>
<input placeholder="Titre" id="first_name" name="titre" type="text" class="validate"<?php if($mode_edition == 1) {?>value ="<?=$edit_article['titre']?>"<?php } ?>>
        </div>
        <div class="input-field col s6">
          <label for="last_name">Description</label>
          <textarea id="last_name" type="text" name="description">
          <?php if($mode_edition == 1) {?><?=$edit_article['description']?><?php } ?>
          </textarea>
        </div>
      </div>
    </div>
  <input type="submit" id ="btninsert" class="btn btn-success mr-2 ml-2" value="Envoyer">
</form>

</body>
</html>
