<?php $data = isset($data) ? $data : new Prof();?>
<form action="<?= BASE_URL.$_GET['url'];?>" method="post">
  <table align="center" border="2px">
    <?php if($data->id != 0):?>
    <tr>
      <th>id</th>
      <td><input type="text" value="<?= $data->id; ?>" readonly></td>
    </tr>
    <?php endif;?>
    <tr>
      <th>nom</th>
      <td><input type="text" value="<?= $data->nom; ?>" name="nom" required></td>
    </tr>
      <th>prenom</th>
      <td><input type="text" value="<?= $data->prenom; ?>" name="prenom" required></td>
    <tr>
      <th>specialiste</th>
      <td><input type="text" value="<?= $data->specialiste; ?>" name="specialiste" required></td>
    </tr>
    <tr>
      <td><a href="<?= BASE_URL ?>Profs/index" style="margin-right: 10px;">&lt;&lt;return</a> </td>
      <td><input type="submit" value="submit" name="submit"></td>
    </tr>
  </table>
</form>