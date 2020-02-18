
<?php

require_once('header.php');
require_once('model/dbconnect.php');
?>
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m12">
<?php
require_once('model/articleModel.php');
require_once('model/reportModel.php');

?>
         </div>
      </div>
    </div>
  </div>

<form class=" container col m8 s12" method="POST" action=""><h5>Commentaires</h2>
      <div class="row">
        <div class="input-field col m6 s6 ">
          <label for="first_name">Pseudo</label>
          <input placeholder="Pseudo" id="first_name" name="Pseudo" type="text" class="validate">
        </div>
        <div class="input-field col m8 s6">
          <label for="last_name">message</label><br></br>
          <textarea id="last_name" type="text" name="message"></textarea>
        </div>
      </div>
    </div>
  <input type="submit" id ="btninsert" class="btn btn-success mr-2 ml-2" value="Envoyer">
</form><br></br>
<?php require_once('footer.php');
?>

</body>
</html>