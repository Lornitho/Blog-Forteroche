<?php
// On démarre la session AVANT d'écrire du code HTML
require_once('header.php');
require_once('model/dbconnect.php');

if($_SESSION['pseudo']==""){
  header('Location: connexion.php');
  }
?>


<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m12">
        <div class="card">
          <div class="card-action">
          <a href="admin-article.php"><i class="material-icons left">insert_drive_file</i>Vos articles</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m12">
        <div class="card">   
          <div class="card-action">
          <a href="admin-user.php"><i class="material-icons left">supervisor_account</i>Comptes d'utilisateur</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m12">
        <div class="card">   
          <div class="card-action">
          <a href="admin-report.php"><i class="material-icons left">report_problem</i>Signalements</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>