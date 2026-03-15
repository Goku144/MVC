<table align="center" border="2px">
    <tr>
      <th>id</th>
      <td><input type="text" value="<?= $data->id; ?>" readonly></td>
    </tr>
    <tr>
      <th>nom</th>
      <td><input type="text" value="<?= $data->nom; ?>" name="nom" readonly></td>
    </tr>
      <th>prenom</th>
      <td><input type="text" value="<?= $data->prenom; ?>" name="prenom" readonly></td>
    <tr>
      <th>specialiste</th>
      <td><input type="text" value="<?= $data->specialiste; ?>" name="specialiste" readonly></td>
    </tr>
</table>
<div style="text-align: center;">
    <a href="<?= BASE_URL ?>Profs/index">&lt;&lt;return</a>
</div>