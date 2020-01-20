<?php
while($comment =$commentaires->fetch()){
    echo '<p>'. $comment['username']. '-' . $comment['datecomment'].'<p>'.'<p>' .  $comment['text'] .'</p>' .'<a href="report.php?id='.$comment['id'].'" >Signaler commentaire</a>';
}
if (isset($_POST['Pseudo'])&& isset($_POST['message'])){
    $Pseudo=$_POST['Pseudo'];
    $message=$_POST['message'];
    $req = $bdd->prepare('INSERT INTO commentaire(username, text, datecomment, idbillet, flag) VALUES(:username, :text, NOW(), :idbillet, 0)');
    $req->execute(array(
        'username' => $Pseudo,
        'text' => $message,
        'idbillet' => $id
        ));
        header('Location: article.php?id='.$id);
}
?>