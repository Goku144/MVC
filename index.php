<?php
require '../errcor.php';

require_once 'controllers/Request.php';

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

  $command = explode('/',$_GET['url']);
  $controler = $command[0];
  $action = $command[1];
  $id = isset($command[2]) ? (int) $command[2] : 0;

  require_once 'controllers/'.$controler.'.php';
  require_once 'models/'.substr($controler, 0, -1).'.php';

  $class = substr($controler, 0, -1);
  $controler = new $controler;
  $model = new $class;

  switch ($action) 
  {
    case 'index':
        $controler->index();
      break;
    case 'show':
        $controler->show($id);
      break;
    case 'create':
        if(!isset($_POST['submit'])):
          $controler->create();
        else:
          $controler->store(new Request($_POST));
          $controler->redirect($command[0].'/index');
        endif;
      break;
    case 'edit':
        if(!isset($_POST['submit'])):
          $controler->edit($id);
        else:
          $controler->update($id, new Request($_POST));
          $controler->redirect($command[0].'/index');
        endif;
      break;
    case 'delete':
        $controler->destroy($id);
        $controler->redirect($command[0].'/index');
      break;
  }
endif;

include('view/public/inc/footer.php');
?>