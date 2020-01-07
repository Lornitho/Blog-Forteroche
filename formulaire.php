
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


if (isset($_POST['Pseudo'])&& isset($_POST['Mail'])){
    $Pseudo=$_POST['Pseudo'];
    $Mail=$_POST['Mail'];
    $password=$_POST['password'];
   
    $req = $bdd->prepare('INSERT INTO utilisateur(usename, mail, password) VALUES(:usename, :mail, :password)');
    $req->execute(array(
        'usename' => $Pseudo,
        'mail' => $Mail,
        'password' => $password
        ));
        // creation d'une session
        session_start();
        $_SESSION['Pseudo']=$Pseudo;
        $_SESSION['password']=$password;
        $_SESSION['Mail']=$Mail;
        header('Location: index.php');
}

?>
    <form class="col s12" method="POST">
      <div class="row">
        <div class="input-field col s6">
          <label for="first_name">Pseudo</label>
          <input  id="first_name" name="Pseudo" type="text" class="validate">
        </div>
        <div class="input-field col s6">
          <label for="last_name">Mail</label>
          <input id="last_name" type="email" name="Mail">
        </div>
        <div class="input-field col s6">
          <label for="last_name">Mot de passe</label>
          <input id="last_name" type="password" name="password">
        </div>
      </div>
    </div>
  <input type="submit" id ="btninsert" class="btn btn-success mr-2 ml-2" value="Envoyer">
</form>

</body>
</html>