
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
</head>
<body>
<?php
require_once('header.php');
require_once('model/dbconnect.php');



$id=$_GET['id'];
$billet =$bdd->query("SELECT  * FROM billet WHERE id=$id");
$commentaires =$bdd->query("SELECT  * FROM commentaire WHERE idbillet=$id");

while ($data =$billet->fetch()){
  echo '<h2>' . $data['titre'].'</h2>'. $data['description'] .'<p>'. $data['dateAjout'].'<p>'; 
}
 while($comment =$commentaires->fetch()){
    echo '<p>'. $comment['username']. '-' . $comment['datecomment'].'<p>'.'<p>' .  $comment['text'] .'</p>';
}
if (isset($_POST['Pseudo'])&& isset($_POST['message'])){
    $Pseudo=$_POST['Pseudo'];
    $message=$_POST['message'];
    $req = $bdd->prepare('INSERT INTO commentaire(username, text, datecomment, idbillet) VALUES(:username, :text, NOW(), :idbillet)');
    $req->execute(array(
        'username' => $Pseudo,
        'text' => $message,
        'idbillet' => $id
        ));
        header('Location: article.php?id='.$id);
}
?>
<h2>commentaires</h2>
<form class="col s12" method="POST" action="">
      <div class="row">
        <div class="input-field col s6">
          <label for="first_name">Pseudo</label>
          <input placeholder="Pseudo" id="first_name" name="Pseudo" type="text" class="validate">
        </div>
        <div class="input-field col s6">
          <label for="last_name">message</label>
          <textarea id="last_name" type="text" name="message"></textarea>
        </div>
      </div>
    </div>
  <input type="submit" id ="btninsert" class="btn btn-success mr-2 ml-2" value="Envoyer">
</form>

</body>
</html>