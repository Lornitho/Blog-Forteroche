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

if(isset($_POST['report_mode']))
{   
    $userreport=$_GET['pseudo'];
    $commentid=$_GET['message'];
    $reqreport = $bdd->prepare('INSERT INTO report (commentid, userreport) VALUES(:commentid, :userreport)');
    $$reqreport->execute(array(
        'userreport' => $userreport,
        'commentid' => $commentid,
        'id' => 1
    ));
    Echo "Le signalement de ce commentaire a été pris en compte.";
    }
    ?>