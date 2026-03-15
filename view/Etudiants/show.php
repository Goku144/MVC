<table align="center" border="2px">
  <tr>
    <th>id</th>
    <td><input type="text" value="<?php echo $data->id; ?>" readonly></td>
  </tr>
  <tr>
    <th>nom</th>
    <td><input type="text" value="<?php echo $data->nom; ?>" name="nom" readonly></td>
  </tr>
    <th>prenom</th>
    <td><input type="text" value="<?php echo $data->prenom; ?>" name="prenom" readonly></td>
  <tr>
    <th>specialiste</th>
    <td><input type="text" value="<?php echo $data->specialiste; ?>" name="specialiste" readonly></td>
  </tr>
</table>
<div style="text-align: center;">
    <a href="/web/MVC/Etudiants/index">&lt;&lt;return</a>
</div>