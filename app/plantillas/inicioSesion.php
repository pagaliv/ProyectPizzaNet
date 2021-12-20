<?php ob_start() ?>

<fieldset>
  <legend>Inicio de sesión</legend>
  <form action="" method="post">
    <p><label>Usuario <input type="text" name="usu" value="" pattern="[A-Za-z0-9]{4,32}" require></label></p>
    <p><label>Contraseña <input type="password" name="pass" value="" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).{8,16}" require></label></p>
    <input type="submit" name="ok" value="Ingresar">
    <?= isset($error) ? '<p class="error">Usuario o contraseña incorrectos</p>' : ''?>
  </form>
</fieldset>

<?php $contenido = ob_get_clean() ?>

<?php include 'base.php' ?>