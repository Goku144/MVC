<?php
include_once __DIR__.'/../DAO/class.Model.php';

class Etudiant extends Model
{
  public $nom, $prenom, $specialiste;

  public function setProf($id = 0, $nom = '', $prenom = '', $specialiste = '')
  {
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->specialiste = $specialiste;
  }
}

?>