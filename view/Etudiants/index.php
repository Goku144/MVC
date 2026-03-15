<table align="center" border="2px">
  <tr>
    <th>id</th>
    <th>nom</th>
    <th>prenom</th>
    <th>specialiste</th>
  </tr>
  <?php foreach($data as $obj): ?>
    <tr>
      <td><?php echo $obj->id; ?></td>
      <td><?php echo $obj->nom; ?></td>
      <td><?php echo $obj->prenom; ?></td>
      <td><?php echo $obj->specialiste; ?></td>
      <td>
        <a href="/web/MVC/Etudiants/show/<?php echo $obj->id; ?>">show&gt;&gt;</a> 
        <a href="/web/MVC/Etudiants/edit/<?php echo $obj->id; ?>">edite&gt;&gt;</a> 
        <a href="/web/MVC/Etudiants/delete/<?php echo $obj->id; ?>">delete&gt;&gt;</a>
      </td>
    </tr>
  <?php endforeach; ?>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><a href="/web/MVC/Etudiants/create">create&gt;&gt;</a></td>
  </tr>
</table>
<div style="text-align: center;">
    <a href="/web/MVC/">&lt;&lt;Home</a>
</div>