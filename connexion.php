<?php
require_once('header.php');
require_once('model/dbconnect.php');

//condition de validation du formulaire
if(isset($_POST['formconnect']))
{
  $pseudoconnect = htmlspecialchars($_POST['pseudoconnect']);  
  $passwordconnect=$_POST['passwordconnect'];
  if(!empty($pseudoconnect) AND !empty ($passwordconnect))
  {
    $requser= $bdd->prepare("SELECT * FROM utilisateur WHERE usename = ?  ");
    $requser->execute(array($pseudoconnect));
    $userexist = $requser->rowCount();
    
    if($userexist == 1){
      $userinfo = $requser->fetch();
     
      if($userinfo['password']==$passwordconnect){
        $_SESSION['pseudo']=$pseudoconnect;
     
        header('Location: index.php');

      }
      
      
    }
    else{
      $erreur = "Mauvais identifiant ou mot de passe";
    }
  }
  else {
    $erreur ="Tous les champs doivent être remplis";
  }
}




if(isset($erreur))
{
  echo '<font color="red">'.$erreur."</font>";
}
?>
<body>

<form class="container col m12 s12" method="POST">
  <div class="row">
      <div class="input-field col m10 s4">
        <label for="last_name">Identifiant</label><br></br>
        <input name="pseudoconnect" id="pseudoconnect" type="text" class="validate">
      </div>
    <div class="input-field col m10 s4">
      <label for="last_name">Mot de passe</label><br></br>
      <input name="passwordconnect" id="passwordconnect" type="password" class="validate">
      </div>
    </div>
  </div>
  <input name="formconnect" id ="formconnect" type="submit"  class="btn btn-success mr-2 ml-2" value="Se connecter" >
</form>

</body>
</html>