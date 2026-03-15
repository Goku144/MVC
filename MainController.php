<?php
require_once 'controllers/Request.php';
class MainController
{
  private static $class, $controler, $action, $id;
  public static function run()
  {    
    self::init();
    self::load();
    self::actions();
  }

  private function __construct(){}
  private static function init()
  {
    $command = explode('/',$_GET['url']);
    self::$class = $command[0];
    self::$action = $command[1] ?? 'index';
    self::$id = (int) ($command[2] ?? 0);
  }

  private static function load()
  {
    require_once 'controllers/'.self::$class.'.php';
    require_once 'models/'.substr(self::$class, 0, -1).'.php';
    $controllerName = self::$class;
    self::$controler = new $controllerName;
    $class = substr($controllerName, 0, -1);
    new $class;
  }

  private static function actions()
  {
      switch (self::$action) 
    {
      case 'index':
          self::$controler->index();
        break;
      case 'show':
          self::$controler->show(self::$id);
        break;
      case 'create':
          if(!isset($_POST['submit'])):
            self::$controler->create();
          else:
            self::$controler->store(new Request($_POST));
            self::$controler->redirect(self::$class.'/index');
          endif;
        break;
      case 'edit':
          if(!isset($_POST['submit'])):
            self::$controler->edit(self::$id);
          else:
            self::$controler->update(self::$id, new Request($_POST));
            self::$controler->redirect(self::$class.'/index');
          endif;
        break;
      case 'delete':
          self::$controler->destroy(self::$id);
          self::$controler->redirect(self::$class.'/index');
        break;
    }
  }
}
?>