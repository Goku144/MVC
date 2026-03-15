<?php
include_once 'Controller.php';
class Profs extends Controller
{
  public function index()
  {
    $this->view("index", Prof::all());
  }
  public function show($id)
  {
    $this->view('show', Prof::find($id));
  }
  public function create()
  {
    $this->view('form');
  }
  public function store($request)
  {
    $prof = new Prof();
    $prof->nom = $request->input('nom');
    $prof->prenom = $request->input('prenom');
    $prof->specialiste = $request->input('specialiste');
    $prof->save();
  }
  public function edit($id)
  {
    $this->view('form', Prof::find($id));
  }
  public function update($id, $request)
  {
    $prof = new Prof();
    $prof->id = $id;
    $prof->nom = $request->input('nom');
    $prof->prenom = $request->input('prenom');
    $prof->specialiste = $request->input('specialiste');
    $prof->save();
  }
  public function destroy($id)
  {
    $prof = new Prof();
    $prof->id = $id;
    $prof->delete();
  }
}
?>