<?php
require_once 'MainController.php';

include('view/public/inc/header.php');

$controler = null;

if(!isset($_GET['url'])):
?>
<div style="text-align: center;">
  <h1><a href="/web/MVC/Profs/index">Liste des Profs</a></h1>
  <br><br>
  <h1><a href="/web/MVC/Etudiants/index">List des Etudiant</a></h1>
</div>
<?php
else:

MainController::run();

endif;

include('view/public/inc/footer.php');
?>