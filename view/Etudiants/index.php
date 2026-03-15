<table align="center" border="2px">
  <tr>
    <th>id</th>
    <th>nom</th>
    <th>prenom</th>
    <th>specialiste</th>
  </tr>
  <?php foreach($data as $obj): ?>
    <tr>
      <td><?= $obj->id; ?></td>
      <td><?= $obj->nom; ?></td>
      <td><?= $obj->prenom; ?></td>
      <td><?= $obj->specialiste; ?></td>
      <td>
        <a href="<?= BASE_URL ?>Etudiants/show/<?= $obj->id; ?>">show&gt;&gt;</a> 
        <a href="<?= BASE_URL ?>Etudiants/edit/<?= $obj->id; ?>">edite&gt;&gt;</a> 
        <a href="<?= BASE_URL ?>Etudiants/delete/<?= $obj->id; ?>">delete&gt;&gt;</a>
      </td>
    </tr>
  <?php endforeach; ?>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align: center;"><a href="<?= BASE_URL ?>Etudiants/create">create&gt;&gt;</a></td>
  </tr>
</table>
<div style="text-align: center;">
    <a href="<?= BASE_URL ?>">&lt;&lt;Home</a>
</div>