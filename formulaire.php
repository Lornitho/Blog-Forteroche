
<?php
require_once('header.php');
require_once('model/dbconnect.php');
//condition de validation du formulaire
if(isset($_POST['forminscription']))
{  
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $mail = htmlspecialchars($_POST['mail']);  
  if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['password'])){
  
    //vérifier si le pseudo exist 
    
    $requser = $bdd->prepare("SELECT * FROM Utilisateur WHERE usename = :usename");
  	$requser->bindValue(':usename', $pseudo, PDO::PARAM_STR);
	  $requser->execute();
   
    //vérifier si email exist
    $reqmail = $bdd->prepare("SELECT * FROM Utilisateur WHERE mail = :mail");
  	$reqmail->bindValue(':mail', $mail, PDO::PARAM_STR);
	  $reqmail->execute();
    
  
    $userexist = $requser->rowCount();
    $emailexist= $reqmail->rowCount();
    if($userexist >= 1){
      $erreur ="Pseudo déjà utiliser !";
    }
    else if ($emailexist>=1){
      $erreur ="Email déjà utiliser !";
    }else{
      $mail = htmlspecialchars($_POST['mail']);  
      $pseudo = htmlspecialchars($_POST['pseudo']);
      $password=sha1($_POST['password']);
      // insertion dans notre base de donnée des inscrits
      $req = $bdd->prepare('INSERT INTO utilisateur(usename, mail, password) VALUES(:usename, :mail, :password)');
      $req->execute(array(
        'usename' => $pseudo,
        'mail' => $mail,
        'password' => $password
      ));
      // creation d'une session
      session_start();
      $_SESSION['pseudo']=$pseudo;
      $_SESSION['password']=$password;
      $_SESSION['Mail']=$mail;
      header('Location: index.php');
    }
    
  } else {
    $erreur = "Tous les champs doivent être complétés !";
  }
}
if(isset($erreur))
{
  echo '<font color="red">'.$erreur."</font>";
}
?>

<form class="container col m12 s12" method="POST" action="">
  <div class="row">
      <div class="input-field col m10 s4">
        <label for="first_name">Pseudo</label><br></br>
        <input  id="first_name" name="pseudo" type="text" class="validate">
      </div>
      <div class="input-field col m10 s4">
        <label for="last_name">Mail</label><br></br>
        <input id="email" type="email" name="mail">
      </div>
    <div class="input-field col m10 s4">
      <label for="last_name">Mot de passe</label><br></br>
      <input id="password" type="password" name="password">
      </div>
    </div>
  </div>
  <input type="submit" id ="forminscription" class="btn btn-success mr-2 ml-2" value="Envoyer" name="forminscription">
</form><br></br>

</body>
</html>