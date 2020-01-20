<?php
session_start();
require_once('header.php');
require_once('model/dbconnect.php');
//condition de validation du formulaire
if(isset($_POST['formconnect']))
{   
  $mailconnect = htmlspecialchars($_POST['mailconnect']);  
  $pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);
  $passwordconnect = sha1($_POST['passwordconnect']);
  if(!empty($pseudoconnect) AND !empty($passwordconnect) AND !empty($mailconnect))
  {
    $reqconnect = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? AND password = ? AND usename = ?");
    $reqconnect->execute(array($mailconnect, $pseudoconnect, $passwordconnect));
    $userexist = $reqconnect->rowCount();
    
    if($userexist == 1)
    {
      $userinfo = $reqconnect->fetch();
      $_SESSION['id'] = $userinfo['id'];
      $_SESSION['mail'] = $userinfo['mail'];
      $_SESSION['usename'] = $userinfo['usename'];
      $_SESSION['password'] = $userinfo['password'];
      header('Location: profil.php?id='.$_SESSION['id']);
    }
    else {
      $erreur = "Veuillez verifier votre pseudo mail ou mot de passe !";
    }
    
  }
  else {
    $erreur = "Tous les champs doivent être complétés !";       
    if(isset($erreur))
    {
      echo '<font color="red">'.$erreur."</font>";
    }   
  } 
} 

?>
<body>

<form class="col s12" method="POST">
  <div class="row">
      <div class="input-field col s6">
        <label for="first_name">Pseudo</label>
        <input  id="pseudoconnect" name="pseudoconnect" type="text">
      </div>
      <div class="input-field col s6">
        <label for="last_name">Mail</label>
        <input name="mailconnect" id="mailconnect" type="email" />
      </div>
    <div class="input-field col s6">
      <label for="last_name">Mot de passe</label>
      <input name="passwordconnect" id="passwordconnect" type="password" >
      </div>
    </div>
  </div>
  <input name="formconnect" id ="formconnect" type="submit"  class="btn btn-success mr-2 ml-2" value="Se connecter" >
</form>

</body>
</html>