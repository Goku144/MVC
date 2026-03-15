<?php $data = isset($data) ? $data : new Etudiant();?>
<form action="/web/MVC/<?php echo $_GET['url'];?>" method="post">
  <table align="center" border="2px">
    <?php if($data->id != 0):?>
    <tr>
      <th>id</th>
      <td><input type="text" value="<?php echo $data->id; ?>" readonly></td>
    </tr>
    <?php endif;?>
    <tr>
      <th>nom</th>
      <td><input type="text" value="<?php echo $data->nom; ?>" name="nom"></td>
    </tr>
      <th>prenom</th>
      <td><input type="text" value="<?php echo $data->prenom; ?>" name="prenom"></td>
    <tr>
      <th>specialiste</th>
      <td><input type="text" value="<?php echo $data->specialiste; ?>" name="specialiste"></td>
    </tr>
    <tr>
      <td><a href="/web/MVC/Etudiants/index" style="margin-right: 10px;">&lt;&lt;return</a> </td>
      <td align="center"><input type="submit" value="submit" name="submit"></td>
    </tr>
  </table>
</form>