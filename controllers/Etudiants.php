<?php
include_once 'Controller.php';
class Etudiants extends Controller
{
  public function index()
  {
    $this->view("index", Etudiant::all());
  }
  public function show($id)
  {
    $this->view('show', Etudiant::find($id));
  }
  public function create()
  {
    $this->view('form');
  }
  public function store($request)
  {
    $etudiant = new Etudiant();
    $etudiant->nom = $request->input('nom');
    $etudiant->prenom = $request->input('prenom');
    $etudiant->specialiste = $request->input('specialiste');
    $etudiant->save();
  }
  public function edit($id)
  {
    $this->view('form', Etudiant::find($id));
  }
  public function update($id, $request)
  {
    $etudiant = new Etudiant();
    $etudiant->id = $id;
    $etudiant->nom = $request->input('nom');
    $etudiant->prenom = $request->input('prenom');
    $etudiant->specialiste = $request->input('specialiste');
    $etudiant->save();
  }
  public function destroy($id)
  {
    $etudiant = new Etudiant();
    $etudiant->id = $id;
    $etudiant->delete();
  }
}
?>