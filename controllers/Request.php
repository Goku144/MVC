<?php
class Request
{
  public function __construct($POST)
  {
    foreach($POST as $key => $value):
      $this->$key = $value;
    endforeach;
  }

  public function input($key)
  {
    return $this->$key;
  }
}
?>