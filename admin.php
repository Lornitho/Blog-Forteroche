<?php
// On démarre la session AVANT d'écrire du code HTML
require_once('header.php');
require_once('model/dbconnect.php');

$report_comment = $bdd->prepare("SELECT * FROM commentaire");
    $report_comment->execute();
$article = $bdd->prepare("SELECT * FROM billet");
    $article->execute();

?>
<div class="container">

<h5>Liste articles</h5>
    <table>
        <tr>
            <th>Titre</th>
            <th>Date de parution</th>
            <th>Option</th>
        </tr>
        <tr>
            <td><?php echo '<h4>' . $_SESSION['titre'].'</h4>'; ?></th>
            <td>7</td>
            <td>Effacer</td>
        </tr>
    </table>
<h5>Liste utilisateurs</h5>
    <table>
        <tr>
            <th>Pseudo</th>
            <th>Mail</th>
            <th>Option</th>

        </tr>
        <tr>
            <td>TR-7</th>
            <td>7</td>
            <td>Effacer</td>

        </tr>
    </table>
<h5>Liste des signalements</h5>
    <table>
        <tr>
            <th>Titre</th>
            <th>Date de parution</th>
            <th>Option</th>
        </tr>
        <tr>
            <td>TR</th>
            <td>7</td>
            <td>Effacer</td
        </tr>
    </table>
</div>   