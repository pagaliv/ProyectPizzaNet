<?php ob_start() ?>

<fieldset>
  <legend>Añadir nueva pizza</legend>
  <form action="" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <th>
          <label for="pizza">Pizza</label>
        </th>
        <td>
          <input type="text" name="pizza" value="" require>
        </td>
      </tr>
      <tr>
        <th>
          <label for="descripcion">Descripción</label>
        </th>
        <td>
          <textarea name="descripcion" cols="30" rows="5"></textarea>
        </td>
      </tr>
      <tr>
        <th>
          <label for="foto">Foto</label>
        </th>
        <td>
          <input type="file" name="foto">
        </td>
        <td>
          <?= isset($error) ? '<p class="error">' . $error . '</p>' : ''?>
        </td>
      </tr>
    </table>
    <br>
    <input type="submit" name="ok" value="Añadir">
    
  </form>
</fieldset>

<?php $contenido = ob_get_clean() ?>

<?php include 'base.php' ?>