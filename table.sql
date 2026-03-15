CREATE DATABASE ecole;
USE ecole;

CREATE TABLE Prof
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  specialiste VARCHAR(50)
);

drop table Prof;

select * from Etudiant;

CREATE TABLE Etudiant
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  specialiste VARCHAR(50)
);

drop table Etudiant;

Insert into Etudiant (id,nom,prenom,specialiste) value (1,'t','u','o');


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