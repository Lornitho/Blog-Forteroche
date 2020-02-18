<?php
while($comment =$commentaires->fetch()){
    if(!empty($_SESSION['pseudo'])){
    echo '<p>'. $comment['username']. '-' . $comment['datecomment'].'<p>'.'<p>' .  $comment['text'] .'</p>' .'  <a href="model/reportModel.php?id='.$comment['id'].'">Signaler commentaire</a>
    ';
    }
    else{
        echo '<p>'. $comment['username']. '-' . $comment['datecomment'].'<p>'.'<p>' .  $comment['text'] .'</p>';
    }
}
if (isset($_POST['Pseudo'])&& isset($_POST['message'])){
    $Pseudo=$_POST['pseudo'];
    $message=$_POST['message'];
    $req = $bdd->prepare('INSERT INTO commentaire(username, text, datecomment, idbillet, flag) VALUES(:username, :text, NOW(), :idbillet, 0)');
    $req->execute(array(
        'username' => $Pseudo,
        'text' => $message,
        'idbillet' => $id
    ));
}

    ?>