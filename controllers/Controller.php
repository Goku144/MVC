<?php
abstract class Controller
{
  public function __construct()
  {
    require_once __DIR__.'/../models/'.substr(get_called_class(), 0, -1).'.php'; //Etudiants -> Etudiant
  }

  public function view(string $fichier, $data = null)
  {
    require_once __DIR__.'/../view/'.get_called_class().'/'.$fichier.'.php';
  }

  public function redirect($chemin)
  {
    header("Location: ".BASE_URL.$chemin);
    exit;
  }

  abstract public function index();
  abstract public function show($id);
  abstract public function create();
  abstract public function store($request);
  abstract public function edit($id);
  abstract public function update($id, $request);
  abstract public function destroy($id);
}
?>