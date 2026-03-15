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
        <a href="/web/MVC/Profs/show/<?php echo $obj->id; ?>">show&gt;&gt;</a> 
        <a href="/web/MVC/Profs/edit/<?php echo $obj->id; ?>">edite&gt;&gt;</a> 
        <a href="/web/MVC/Profs/delete/<?php echo $obj->id; ?>">delete&gt;&gt;</a>
      </td>
    </tr>
  <?php endforeach; ?>
  <tr align="center">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align: center;"><a href="/web/MVC/Profs/create">create&gt;&gt;</a></td>
  </tr>
</table>
<div style="text-align: center;">
    <a href="/web/MVC/">&lt;&lt;Home</a>
</div>