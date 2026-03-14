<?php
class Model
{
  public $id = 0;
  private static $pdo = null;

  public function __construct()
  {
    if(self::$pdo == null)
    {
      $var_env = parse_ini_file(".env");
      $dsn = "{$var_env['DB_CONNECTION']}:host={$var_env['DB_HOST']}; dbname={$var_env['DB_DATABASE']}";
      self::$pdo = new PDO($dsn, $var_env['DB_USERNAME'], $var_env['DB_PASSWORD']);
    }
  }

  public function save()
  {
    $arr = (array) $this;
    $query = '';
    if($this->id == 0):
      $columns = '';
      $values = '';
      foreach($arr as $key => $value):
        if($key != 'id'):
          $columns = $columns.$key.',';
          if(is_int($value)):
          $values = $values.$value.",";
          else:
          $values = $values."'".$value."',";
          endif;
        endif;
      endforeach;
      $columns = substr($columns, 0, -1);
      $values = substr($values, 0, -1);
      $query = "INSERT INTO ".get_called_class()." ({$columns}) VALUE ({$values});";
    else:
      $str = '';
      foreach($arr as $key => $value):
        if($key != 'id'):
          if(is_int($value)):
            $str = $str.$key."=".$value.",";
          else:
            $str = $str.$key."="."'".$value."',";
          endif;
        else:
          $id = $value;
        endif;
      endforeach;
      $str = substr($str, 0, -1);
      $query = "UPDATE ".get_called_class()." SET {$str} where id = {$id}";
    endif;
    print_r($query);
    return self::$pdo->exec($query);
  }

  public function delete()
  {
    $query = "DELETE FROM ".get_called_class()." WHERE id = {$this->id}";
    return self::$pdo->exec($query);
  }

  public static function find($id)
  {
    $query = "SELECT * FROM ".get_called_class()." WHERE id = {$id}";
    $result = self::$pdo->query($query, PDO::FETCH_CLASS, get_called_class());
    return $result->fetch();
  }

  public static function all()
  {
    $query = "SELECT * FROM ".get_called_class();
    $result = self::$pdo->query($query, PDO::FETCH_CLASS, get_called_class());
    return $result->fetchAll();
  }
}
?> 